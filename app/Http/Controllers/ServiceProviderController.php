<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Divisions;
use App\Models\Notifications;
use App\Models\Provider;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ServiceProviderController extends Controller
{
    public function index()
    {
        $id=Auth::user()->id;

        $data['pending'] = Bookings::where('provider_id', $id)->where('status', 0)->count();
        $data['approved'] = Bookings::where('provider_id', $id)->where('status', 1)->count();
        $data['inprogress'] = Bookings::where('provider_id', $id)->where('status', 2)->count();
        $data['completed'] = Bookings::where('provider_id', $id)->where('status', 3)->count();
        $data['cancelled'] = Bookings::where('provider_id', $id)->where('status', 4)->count();
        $data['review'] = Review::where('user_id', $id)->count();
        return view('service-provider.dashboard', compact('data'));
    }

    public function serviceStore(Request $request)
    {
        return view('service-provider.service-store');
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $divisions = Divisions::all();
        $user = User::with('provider')->find($id);

        return view('service-provider.profile', compact('user', 'divisions'));
    }

    public function profileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $request->name;


        if ($request->hasFile('picture')) {
            $oldPath = storage_path().'public/uploads/'.$user->picture;
            if (File::exists($oldPath)) {
                unlink($oldPath);
            }
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/profile_picture/', $filename);
            $user->picture = $filename;
        }

        $user->contact = $request->contact;
        $user->save();
        $provider = Provider::where('user_id', $id)->first();
        $provider->address_details = $request->address_details;
        $provider->division_id = $request->division_id;
        $provider->district_id = $request->district_id;


        $save = $provider->save();

        if ($save) {
            return redirect()->route('service-provider.profile')->with('success', 'Updated Successfully');
        } else {
            return redirect()->route('service-provider.profile')->with('error', 'Updated Failed');
        }
    }

    public function userNotificaiton()
    {
        $notifications = Notifications::where('provider_id')->get();
        return view('user.notifications', compact('notifications'));
    }
}
