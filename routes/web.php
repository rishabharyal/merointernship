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

//Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact']);

//Internship
// Route::get('/internships', 'InternshipController@index');
// Route::get('/internships/city/{city}', 'InternshipController@show_by_city');
// Route::get('/internships/title/{title}', 'InternshipController@show_by_title');
// Route::get('/internships/industry/{industry}', 'InternshipController@show_by_industry');
// Route::get('/internships/search', 'InternshipController@search');

Route::resource('internship', 'InternshipController');

Route::namespace('Admin')->prefix('admin')->group(static function() {
    Route::get('/', 'DashboardController@index');
    Route::resource('internship', 'InternshipController');
    Route::resource('organization', 'OrganizationController');
    Route::resource('institution', 'InstitutionController');
    Route::resource('settings','SettingsController');
});
