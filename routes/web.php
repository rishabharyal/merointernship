<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::middleware('is-company-registered')->group(function() {
    //Home
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about']);
    Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact']);

    //Internship
    // Route::get('/internships', 'InternshipController@index');
    Route::get('/internships/{type}/{value}', 'InternshipController@index');
    // Route::get('/internships/search', 'InternshipController@search');

    Route::resource('internship', 'InternshipController');
    Route::resource('subscriber', 'SubscriberController');
});

Route::middleware(['auth', 'company'])->group(function() {
    Route::get('company/intro', 'OrganizationController@index');
    Route::get('/home', 'InternshipController@create');
    Route::get('/home/internships', 'InternshipController@show');
    Route::resource('organization', 'OrganizationController');
});

Route::namespace('Admin')->prefix('admin')->group(static function() {
    Route::get('/', 'DashboardController@index');
    Route::resource('internship', 'InternshipController');
    Route::resource('organization', 'OrganizationController');
    Route::resource('institution', 'InstitutionController');
    Route::resource('settings','SettingsController');
});
