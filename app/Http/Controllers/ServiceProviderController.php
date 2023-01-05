<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ServiceProviderController extends Controller
{
    public function index()
    {
        // var_dump('ServiceProviderController@index');die;
        return view('service-provider.dashboard');
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
        $user = $request->only(
            'name',
            'email',
        );
        $user = User::find($id);
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();
        //provider profile update
        $provider = Provider::where('user_id', $id)->first();
        $provider->contact = $request->contact;
        $provider->address_details = $request->address_details;
        $provider->division_id = $request->division_id;
        $provider->district_id = $request->district_id;

        if ($request->hasFile('profile_picture')) {
            $oldPath = storage_path().'public/uploads/'.$provider->profile_picture;
            if (File::exists($oldPath)) {
                unlink($oldPath);
            }
            $file = $request->file('profile_picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/profile_picture/', $filename);
            $provider->profile_picture = $filename;
        }
        $save = $provider->save();

        if ($save) {
            return redirect()->route('service-provider.profile')->with('success', 'Updated Successfully');
        } else {
            return redirect()->route('service-provider.profile')->with('error', 'Updated Failed');
        }
    }
}
