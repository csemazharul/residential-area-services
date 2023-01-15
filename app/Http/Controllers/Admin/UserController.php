<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bookings;
use App\Models\Notifications;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::all();
        //get service provider list from users
        // $users = User::whereHas('roles', function ($q) {
        //     $q->where('name', 'service-provider');
        // })->get();

        // return $users;
        // die;

        // if($booking->status == 0){
        //     $status = 'Pending';
        //     }elseif($booking->status == 1){
        //     $status = 'Approved';
        //     }elseif($booking->status == 2){
        //     $status = 'Inprogress';
        //     }elseif($booking->status == 3){
        //     $status = 'Completed';
        //     }elseif($booking->status == 4){
        //     $status = 'Cancelled';
        //     }
        $id=Auth::user()->id;
        // $notifications = Notifications::where('user_id', $id)->count();
        //user booking status count from booking database
        $data['pending'] = Bookings::where('user_id', $id)->where('status', 0)->count();
        $data['approved'] = Bookings::where('user_id', $id)->where('status', 1)->count();
        $data['inprogress'] = Bookings::where('user_id', $id)->where('status', 2)->count();
        $data['completed'] = Bookings::where('user_id', $id)->where('status', 3)->count();
        $data['cancelled'] = Bookings::where('user_id', $id)->where('status', 4)->count();
        //review user count
        $data['review'] = Review::where('user_id', $id)->count();
        // $data['notifications'] = $notifications;

        //Booking

        return view('dashboard', compact('data'));
    }

    public function getUsers()
    {
        $users = User::whereHas('roles', function ($q) {
            $q->where('name', 'user');
        })->get();

        return view('admin.users.list', compact('users'));
    }

    public function getServiceProviders()
    {
        $providers = User::whereHas('roles', function ($q) {
            $q->where('name', 'service-provider');
        })->get();

        return view('admin.providers.list', compact('providers'));
    }

    public function deletedUser($id)
    {
        $deleted = User::where('id', $id)->delete();
        if ($deleted) {
            return back()->with('success', 'User deleted successfully.');
        } else {
            return back()->with('success', 'User not deleted.');
        }
    }

    public function userProfile()
    {
        return view('user.profile');
    }

    public function profileUpdate(Request $request)
    {
        $id = Auth::user()->id;

        $data=[
            'name' => $request->name,
            'contact' => $request->contact
        ];

        if ($request->hasFile('picture')) {
            $pictureName = time().'.'.$request->picture->extension();
            $request->picture->move(public_path('uploads/profile_picture'), $pictureName);
            //if user already have profile picture then delete it
            if (Auth::user()->picture) {
                $image_path = public_path('uploads/profile_picture/'.Auth::user()->picture);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }
            $data['picture'] = $pictureName;
        }

        $update = User::where('id', $id)->update($data);
        if ($update) {
            return back()->with('success', 'Profile updated successfully.');
        } else {
            return back()->with('success', 'Profile not updated.');
        }
    }

    public function blockUser($id, $staus)
    {
        $status = $staus == 1 ? 0 : 1;
        $message = $staus == 1 ? 'User blocked successfully.' : 'User unblocked successfully.';
        $blocked = User::where('id', $id)->update(['status'=>$status]);
        if ($blocked) {
            return back()->with('success', $message);
        } else {
            return back()->with('success', 'User not blocked.');
        }
    }



    public function show(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }

    public function assignRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return back()->with('message', 'Role exists.');
        }

        $user->assignRole($request->role);
        return back()->with('message', 'Role assigned.');
    }

    public function removeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('message', 'Role removed.');
        }

        return back()->with('message', 'Role not exists.');
    }

    public function givePermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('message', 'Permission exists.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('message', 'Permission added.');
    }

    public function revokePermission(User $user, Permission $permission)
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return back()->with('message', 'Permission revoked.');
        }
        return back()->with('message', 'Permission does not exists.');
    }

    public function destroy(User $user)
    {
        if ($user->hasRole('admin')) {
            return back()->with('message', 'you are admin.');
        }
        $user->delete();

        return back()->with('message', 'User deleted.');
    }

    public function userNotificaiton()
    {
        $notifications = Notifications::where('user_id')->get();
        return view('user.notifications', compact('notifications'));
    }

    public function notifications($id)
    {
        $roles = Auth::user()->roles;
        $role = $roles[0]->name;
        if ($role == 'user') {
            $updated = Notifications::where('id', $id)->update(['u_seen'=>1]);
            if ($updated) {
                $count = Notifications::where('user_id', Auth::user()->id)->where('u_seen', 0)->get()->count();
                return response()->json(['count'=>$count]);
            }
        } else {
            $updated = Notifications::where('id', $id)->update(['p_seen'=>1]);
            if ($updated) {
                $count = Notifications::where('user_id', Auth::user()->id)->where('p_seen', 0)->get()->count();
                return response()->json(['count'=>$count]);
            }
        }
    }
}
