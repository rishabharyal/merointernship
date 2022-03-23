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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/internships/{type}/{city?}', 'InternshipController@index')->where('type', 'city|fields');;

Route::namespace('Admin')->prefix('admin')->group(static function() {
    Route::get('/', 'DashboardController@index');
    Route::resource('internship', 'InternshipController');
    Route::resource('organization', 'OrganizationController');
    Route::resource('institution', 'InstitutionController');
    Route::resource('settings','SettingsController');
});
