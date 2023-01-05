<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\User;
use Illuminate\Http\Request;
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

        // return view('admin.users.index', compact('users'));
    }

    public function getUsers(){
        $users = User::whereHas('roles', function ($q) {
            $q->where('name', 'user');
        })->get();

        return view('admin.users.list', compact('users'));
    }

    public function getServiceProviders(){
        $providers = User::whereHas('roles', function ($q) {
            $q->where('name', 'service-provider');
        })->get();

        return view('admin.providers.list', compact('providers'));
    }

    public function deletedUser($id){
     
        $deleted = User::where('id',$id)->delete();
        if($deleted){
            return back()->with('success', 'User deleted successfully.');
        }else{
            return back()->with('success', 'User not deleted.');
        }
    }

    public function blockUser($id, $staus){
        $status = $staus == 1 ? 0 : 1;
        $message = $staus == 1 ? 'User blocked successfully.' : 'User unblocked successfully.';
        $blocked = User::where('id',$id)->update(['status'=>$status]);
        if($blocked){
            return back()->with('success', $message);
        }else{
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


}
