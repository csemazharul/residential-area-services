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
        if (isset($service->category->id) && $service->serviceDetails->price_type === 'package') {
            $packages = Packages::where('category_id', $service->category->id)->where('provider_id', $service->service_provider_id)->get();
        }

        $divisions = Divisions::all();
        return view('frontend.book-service', compact('divisions', 'service', 'packages'));
    }

    public function userBookingList()
    {
        $bookings = Bookings::with('service', 'bookDetails', 'provider', 'user', 'division', 'district', 'serviceDetails', 'package')->where('user_id', Auth::user()->id)->paginate(5);

        return view('user.booking-list', compact('bookings'));
    }

    public function providerBookingList()
    {
        $bookings = Bookings::with('service', 'bookDetails', 'provider', 'user', 'division', 'district', 'serviceDetails', 'package')->where('provider_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
        // return $bookings;
        return view('service-provider.bookings', compact('bookings'));
    }
}
