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
    Route::get('/internships/{type}/{value}', 'InternshipController@index');
    Route::get('/internships/{id}', 'InternshipController@detail');
    Route::get('/company/edit', 'OrganizationController@edit');
    Route::resource('account', 'AccountController');
    Route::resource('internship', 'InternshipController');
    Route::resource('subscriber', 'SubscriberController');
    Route::resource('organization', 'OrganizationController');
});

Route::middleware(['auth', 'company'])->group(function() {
    Route::get('company/intro', 'OrganizationController@index');
    Route::get('company/internships', 'InternshipController@create');
    Route::resource('organization', 'OrganizationController');
});

Route::namespace('Admin')->prefix('admin')->group(static function() {
    Route::get('/', 'DashboardController@index');
    Route::resource('internship', 'InternshipController');
    Route::resource('organization', 'OrganizationController');
    Route::resource('institution', 'InstitutionController');
    Route::resource('settings','SettingsController');
});
