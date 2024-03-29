<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceProvider\ServicesController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\SocietyManagerController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

// Route::middleware('auth',  'role:society-manager')->group(function () {
//     Route::get('/test', function () {
//         return 1;
//     });
// });
// Route::middleware('auth',  'role:service-provider')->group(function () {
//     Route::get('/test', function () {
//         return 1;
//     });
// });
// Route::middleware('auth',  'role:user')->group(function () {
//     Route::get('/test', function () {
//         return 1;
//     });
// });

Route::middleware(['auth', 'role:service-provider'])->prefix('service-provider')->group(function () {
    Route::get('/dashboard', [ServiceProviderController::class, 'index'])->name('service-provider.dashboard');
    Route::resource('/services', ServicesController::class);
    Route::resource('/packages', PackagesController::class);
    Route::get('/bookings', [BookingsController::class, 'providerBookingList'])->name('service-provider.bookings');
    Route::get('reviews', [ReviewController::class, 'serviceProviderReviews'])->name('service-provider.reviews');
    Route::get('profile', [ServiceProviderController::class, 'profile'])->name('service-provider.profile');
    Route::post('profile-update', [ServiceProviderController::class, 'profileUpdate'])->name('service-provider.profile-update');
});
Route::middleware(['auth', 'role:user'])->prefix('user')->group(function () {
    // Route::get('/dashboard', [ServiceProviderController::class, 'index'])->name('service-provider.dashboard');
    // Route::resource('/services', ServicesController::class);
    Route::get('/bookings', [BookingsController::class, 'userBookingList'])->name('user.bookings');
    Route::get('/reviews', [ReviewController::class, 'userReviews'])->name('user.reviews');
    Route::get('user/profile', [UserController::class, 'userProfile'])->name('user.profile');
    Route::post('user/profile/update', [UserController::class, 'profileUpdate'])->name('user.profile.update');
    Route::get('favourites', function () {
        return View('user.favourites');
    });
    Route::get('/favorites', [ServicesController::class, 'getUserFavoriteServices'])->name('user.favorites');
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');

    Route::get('service/booking/{service_id}', [BookingsController::class,'bookingForm'])->name('service.book');
});
Route::get('/notifications/seen/{id}', [UserController::class, 'notifications'])->name('notifications.seen');
