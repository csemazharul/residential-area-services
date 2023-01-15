<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'index'])->name('home');
Route::get('/about-us', [PageController::class,'aboutUs'])->name('about-us');
Route::get('/contact-us', [PageController::class,'contactUs'])->name('contact-us');
Route::get('/services', [PageController::class,'allServices'])->name('services');
Route::get('/category/services/{category}', [PageController::class,'categoryServices'])->name('category.services');

Route::get('/services/{service_id}', [PageController::class,'serviceDetails'])->name('services.details');

Route::post('/payment/store', [BookingsController::class,'pay'])->name('payment.store');
Route::get('/payment/fail', [BookingsController::class,'paymentFail'])->name('payment.fail');
Route::get('/payment/cancel', [BookingsController::class,'paymentCancel'])->name('payment.cancel');
Route::post('/pay', [SslCommerzPaymentController::class, 'payment']);

Route::post('/pay-via-ajax', [PaymentController::class,'payment'])->name('payViaAjax');
Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
Route::post('/success', [PaymentController::class, 'success']);
Route::post('/fail', [PaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::middleware(['auth', 'role:Administrator'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');
});
Route::get('get-district/{division_id}', [HelperController::class, 'getDistrict'])->name('get-district');
Route::get('get-upazila/{district_id}', [HelperController::class, 'getUpazila'])->name('get-upazila');
Route::get('get-union/{upazila_id}', [HelperController::class, 'getUnion'])->name('get-union');
Route::get('/categories', [PageController::class, 'categories'])->name('categories');
Route::get('/location/services/search', [PageController::class, 'searchServiceWithLocation'])->name('services.search');
Route::resource('review', ReviewController::class);
Route::post('add-to-favorite', [PageController::class, 'addToFavorite'])->name('add-to-favorite');
Route::post('contact/store', [ContactController::class, 'contactStore'])->name('contact.store');

Route::get('/t', function () {
    event(new \App\Events\NotificationMessage());
    dd('Event Run Successfully.');
});

Route::get('/lang/{locale}', function ($locale = null) {
    if (! in_array($locale, ['en', 'bn'])) {
        abort(400);
    }
    session(['locale' => $locale]);
 
    App::setLocale($locale);
    return redirect()->back();
});


require __DIR__ . '/auth.php';
require __DIR__.'/admin.php';
