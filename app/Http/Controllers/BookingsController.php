<?php

namespace App\Http\Controllers;

use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\bookingDetails;
use App\Models\Bookings;
use App\Models\Divisions;
use App\Models\Packages;
use App\Models\Services;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingsController extends Controller
{
    public function bookingForm(Request $request)
    {
        $service = Services::with('serviceDetails', 'category')->find($request->service_id);
        $packages = [];
        if(isset($service->category->id) && $service->price_type === 'package'){
            $packages = Packages::where('category_id', $service->category->id)->get();
        }

      
        $divisions = Divisions::all();
        return view('frontend.book-service', compact('divisions', 'service', 'packages'));
    }

    public function userBookingList()
    {
        $bookings = Bookings::with('service', 'bookDetails', 'provider', 'user', 'division', 'district')->where('user_id', Auth::user()->id)->get();
        return view('user.booking-list', compact('bookings'));
    }

    public function providerBookingList()
    {
        $bookings = Bookings::with('service', 'bookDetails', 'provider', 'user', 'division', 'district')->where('provider_id', Auth::user()->id)->get();
        // return $bookings;
        return view('service-provider.bookings', compact('bookings'));
    }
}
