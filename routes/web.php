<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * FRONT ROUTES
 */
Route::name('front.')->group(function () {
    Route::view('/', 'front-theme.index')->name('index');
    Route::view('/about', 'front-theme.about')->name('about');
    Route::view('/service', 'front-theme.services')->name('service');
    Route::view('/contact', 'front-theme.contact')->name('contact');
    Route::post('contact/store', [MessageController::class, 'store'])->name('contact.store');
    Route::post('subscriber/store', [SubscriberController::class, 'store'])->name('subscriber.store');
});

/**
 * DASHBOARD ROUTES
 */
Route::prefix(LaravelLocalization::setLocale() . '/dashboard')->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('dashboard.')->group(function () {
    Route::middleware('auth')->group(function () {
        // ===============================> Home Page
        Route::view('/', 'dashboard-theme.index')->name('index')->middleware('auth');

        // ===============================> Servicesp
        Route::controller(ServiceController::class)->group(function () {
            Route::resource('services', ServiceController::class);
        });
        // ===============================> Services
        Route::controller(FeatureController::class)->group(function () {
            Route::resource('features', FeatureController::class);
        });

        // ===============================> Messages
        Route::controller(MessageController::class)->group(function () {
            Route::resource('messages', MessageController::class)->only(['index', 'destroy']);
        });

        // ===============================> Subscribers
        Route::controller(SubscriberController::class)->group(function () {
            Route::resource('subscribers', SubscriberController::class)->only(['index', 'destroy']);
        });

        // ===============================> Testimonial
        Route::controller(TestimonialController::class)->group(function () {
            Route::resource('testimonials', TestimonialController::class);
        });

        // ===============================> Setting
        Route::controller(SettingController::class)->group(function () {
            Route::resource('settings', SettingController::class)->only(['index', 'edit', 'update']);
        });
    });
    require __DIR__.'/auth.php';
});
