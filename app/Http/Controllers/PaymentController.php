<?php

namespace App\Http\Controllers;

use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\bookingDetails;
use App\Models\Bookings;
use App\Models\Notifications;
use App\Models\Services;
use App\Models\User;
use App\Notifications\EmailNotification;
use Illuminate\Http\Request;
use Notification;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        $trackNumber = time();

        $book=[];
        $bookDetails=[];

        $request->validate([
             'division_id' => ['required'],
             'package_id' => ['required'],
             'district_id' => ['required'],
             'contact_name' => ['required'],
             'contact' => ['required'],
             'address' => ['required'],
             'service_date' => ['required'],
             'service_time' => ['required'],

         ]);

        if (!empty($request->package_id) && is_array(explode(',', $request->package_id))) {
            $packages = explode(',', $request->package_id);
            $book['package_id'] = $packages[0];
        }

        $service = Services::with('category', 'serviceDetails')->find($request->service_id);
        $providerId = $service->service_provider_id;
        $userId= $request->user_id;
        // $provider = User::find($providerId);
        $customer = User::find($userId);
        $book['track_number'] = $trackNumber;
        $book['service_id'] = $request->service_id;
        $book['provider_id'] = $providerId;
        $book['user_id'] = $request->user_id;
        $book['division_id'] = $request->division_id;
        $book['district_id'] = $request->district_id;
        $book['status'] = 0;
        $bookDetails['amount'] = $request->amount;

        $post_data = array();
        $post_data['store_id'] = "resen63a894fd80f6c";
        $post_data['store_passwd'] = "resen63a894fd80f6c@ssl";
        $post_data['total_amount'] = $request->amount;
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $trackNumber;
        $post_data['success_url'] = "https://residential-area-services.dev/success";
        $post_data['fail_url'] = "https://residential-area-services.dev/fail";
        $post_data['cancel_url'] = "https://residential-area-services.dev/cancel";

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = isset($request->contact) ? $request->contact : 'karim';
        $post_data['cus_email'] = isset($customer->email) ? $customer->email : 'example@gmail.com';
        $post_data['cus_add1'] = isset($request->adddress) ? $request->adddress : 'Address';
        $post_data['cus_city'] = "CTG";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = isset($request->contact) ? $request->contact : '880184xxxxxx';

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = isset($service->name) ? $service->name : 'service';
        $post_data['product_category'] = isset($service->category->name) ? $service->category->name : 'category';
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['a'] = "1";
        $post_data['b'] = "2";
        $post_data['c'] = "3";
        $post_data['c'] = "4";

        $book = Bookings::create($book);
        if ($book) {
            $bookDetails['book_id'] = $book->id;
            $bookDetails['tran_id'] = '';
            $bookDetails['amount'] = $request->amount;
            $bookDetails['contact_name'] = $request->contact_name;
            $bookDetails['contact'] = $request->contact;
            $bookDetails['address'] = $request->address;
            $bookDetails['service_date'] = $request->service_date;
            $bookDetails['service_time'] = $request->service_time;
            bookingDetails::create($bookDetails);
        }

        $direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v4/api.php";

        $cookie_header = "Cookie:";
        $headers = [];

        foreach ($_COOKIE as $key => $val) {
            // Do sanitize cookie values
            $cookie_header .= " ".$key."=".$val.";";
        }

        $headers[] = $cookie_header;



        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, $direct_api_url);
        curl_setopt($handle, CURLOPT_TIMEOUT, 30);
        curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($handle, CURLOPT_POST, 1);
        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


        $content = curl_exec($handle);

        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

        if ($code == 200 && !(curl_errno($handle))) {
            curl_close($handle);
            $sslcommerzResponse = $content;
        } else {
            curl_close($handle);
            echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
            exit;
        }

        $sslcz = json_decode($sslcommerzResponse, true);


        if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="") {
            // this is important to show the popup, return or echo to sent json response back
            header('Location: ' . $sslcz['GatewayPageURL'], true, 302);
            //   return  json_encode(['status' => 'success', 'data' => $sslcz['GatewayPageURL'], 'logo' => $sslcz['storeLogo'] ]);
            exit();
        } else {
            return  json_encode(['status' => 'fail', 'data' => null, 'message' => "JSON Data parsing error!"]);
        }
    }


    public function success(Request $request)
    {
        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();
        $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);

        if ($validation) {
            $book = Bookings::where('track_number', $tran_id)->first();
            $update = bookingDetails::where('book_id', $book->id)->update(
                [
                    'tran_id' => $request->bank_tran_id,
                    'card_type'=>$request->card_issuer,
                    'payment_status' => 'success'
                ]
            );

            $user = User::find($book->user_id);


            $booking = [
                'title' => 'Hi '.$user->name.',',
                'body' => 'Booking order is successfully Completed ! Your Booking ID is '.$tran_id.'',
                'thanks' => 'Thank you for using our application!',
                'actionText' => 'Home',
                'actionURL' => url('/'),
            ];

            $provider = User::find($book->provider_id);
            $providerNotification =[
                'title' => 'Hi '.$provider->name.',',
                'body' => 'You have a new booking request ! Your Booking Order ID is '.$tran_id.'',
                'thanks' => 'Thank you for using our application!',
                'actionText' => 'Home',
                'actionURL' => url('/'),
            ];

            Notification::send($provider, new EmailNotification($providerNotification));

            Notification::send($user, new EmailNotification($booking));

            Notifications::create(
                [
                    'user_id' => $user->id,
                    'provider_id' => $provider->id,
                    'title' => 'Booking Order',
                    'u_body' => 'Booking order reqeust is successfully Completed ! Your Booking ID is '.$tran_id.'',
                    'p_body' => 'You have a new booking request ! Your Booking Order ID is '.$tran_id.'',
                    'u_seen' => 0,
                    'p_seen' => 0,
                ]
            );
            $data['track_number'] = $tran_id;
            return view('frontend.success', compact('data'));
        } else {
            echo "validation Fail";
        }
    }

    public function fail(Request $request)
    {
        return $request->all();
        // $tran_id = $request->input('tran_id');

        // $order_detials = DB::table('orders')
        //     ->where('transaction_id', $tran_id)
        //     ->select('transaction_id', 'status', 'currency', 'amount')->first();

        // if ($order_detials->status == 'Pending') {
        //     $update_product = DB::table('orders')
        //         ->where('transaction_id', $tran_id)
        //         ->update(['status' => 'Failed']);
        //     echo "Transaction is Falied";
        // } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
        //     echo "Transaction is already Successful";
        // } else {
        //     echo "Transaction is Invalid";
        // }
    }

    // public function cancel(Request $request)
    // {
    //     return $request->all();
    //     $tran_id = $request->input('tran_id');

    //     $order_detials = DB::table('orders')
    //         ->where('transaction_id', $tran_id)
    //         ->select('transaction_id', 'status', 'currency', 'amount')->first();

    //     if ($order_detials->status == 'Pending') {
    //         $update_product = DB::table('orders')
    //             ->where('transaction_id', $tran_id)
    //             ->update(['status' => 'Canceled']);
    //         echo "Transaction is Cancel";
    //     } elseif ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
    //         echo "Transaction is already Successful";
    //     } else {
    //         echo "Transaction is Invalid";
    //     }
    // }

    // public function ipn(Request $request)
    // {
    //     #Received all the payement information from the gateway
    //     if ($request->input('tran_id')) { #Check transation id is posted or not.
    //         $tran_id = $request->input('tran_id');

    //         #Check order status in order tabel against the transaction id or order id.
    //         $order_details = DB::table('orders')
    //             ->where('transaction_id', $tran_id)
    //             ->select('transaction_id', 'status', 'currency', 'amount')->first();

    //         if ($order_details->status == 'Pending') {
    //             $sslc = new SslCommerzNotification();
    //             $validation = $sslc->orderValidate($request->all(), $tran_id, $order_details->amount, $order_details->currency);
    //             if ($validation == true) {
    //                 /*
    //                 That means IPN worked. Here you need to update order status
    //                 in order table as Processing or Complete.
    //                 Here you can also sent sms or email for successful transaction to customer
    //                 */
    //                 $update_product = DB::table('orders')
    //                     ->where('transaction_id', $tran_id)
    //                     ->update(['status' => 'Processing']);

    //                 echo "Transaction is successfully Completed";
    //             }
    //         } elseif ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
    //             #That means Order status already updated. No need to udate database.

    //             echo "Transaction is already successfully Completed";
    //         } else {
    //             #That means something wrong happened. You can redirect customer to your product page.

    //             echo "Invalid Transaction";
    //         }
    //     } else {
    //         echo "Invalid Data";
    //     }
    // }
}
