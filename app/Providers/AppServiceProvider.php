<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Notifications;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();
        $route = '';
        // $role = Auth::user()->roles->pluck('name');
        // return $role;
        // if ($role == 'admin') {
        //     // $role = 'admin';
        //     $route = route('admin.dashboard');
        // } else if($role === 'service-provider'){
        //     $route = route('service-provider.dashboard');
        // }
        // else if($role === 'user'){
        //     $route = route('user.dashboard');
        // }

        // $userNotifications = Notifications::where('user_id', Auth::user()->id)->get();
        // View::share('userNotifications', $userNotifications);
        // $providerNotifications= Notifications::where('provider_id', Auth::user()->id)->get();
        // View::share('providerNotifications', $providerNotifications);

        View::share('categories', $categories);
        // return $role;
        // View::share('route', $route);
    }
}
