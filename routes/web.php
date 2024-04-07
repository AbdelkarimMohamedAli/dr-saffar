<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function()
// 	{
// 		return view('home');
// 	});

	Route::get('/', [HomeController::class, 'index']);



Route::get('/setlocale/{locale}', 'LocaleController@setLocale')->name('setlocale');
Route::middleware(['auth'])->group(function () {

Route::resource('Setting', '\App\Http\Controllers\SettingController');
Route::resource('Slider', '\App\Http\Controllers\SliderController');
Route::resource('Whychooseus', '\App\Http\Controllers\WhychooseusController');
Route::resource('Banner', '\App\Http\Controllers\BannerSectionController');
Route::resource('Menu', '\App\Http\Controllers\MenuController');
Route::resource('Testimonial', '\App\Http\Controllers\TestimonialController');
Route::resource('Blog', '\App\Http\Controllers\BlogController');
Route::resource('DoctorSection', '\App\Http\Controllers\DoctorSectionController');
Route::resource('Service', '\App\Http\Controllers\ServiceController');

});







Route::get('/admin', function () {
    return view('main');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
