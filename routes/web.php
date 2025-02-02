<?php

use App\Http\Controllers\ProfileController;
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

// test theme
Route::name('front.')->group(function () {
    Route::view('/', 'front-theme.index')->name('index');
    Route::view('/about', 'front-theme.about')->name('about');
    Route::view('/service', 'front-theme.services')->name('service');
    Route::view('/contact', 'front-theme.contact')->name('contact');
});

// test theme
Route::prefix(LaravelLocalization::setLocale() . '/dashboard')->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('dashboard.')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::view('/', 'dashboard-theme.index')->name('index')->middleware('auth');
    });
    require __DIR__.'/auth.php';
});
// Route::get('/', function () {
//     return view('front-theme.about');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
