<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use Wave\Facades\Wave;
use App\Http\Controllers\ThemeControler;
use App\Http\Controllers\PersonalSiteDetailController;
use App\Http\Controllers\AirtableController;

// Authentication routes
Auth::routes();

// Voyager Admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Wave routes
Wave::routes();

Route::view('templates', 'theme::01');
Route::view('templates_blue', 'theme::02');
Route::view('templates_yellow', 'theme::03');

Route::view('terms', 'theme::terms');

Route::view('privacy', 'theme::privacy');

Route::view('apptemplate', 'theme::apptemplate');

Route::get('themes/{num}', 'App\Http\Controllers\ThemeControler@show');
Route::get('/siteinfo', 'App\Http\Controllers\PersonalSiteDetailController@create')->name('themes/dashboard.siteinfo');
Route::post('/siteinfo', 'App\Http\Controllers\PersonalSiteDetailController@store')->name('personal_site_detail.store');
Route::get('/siteinfo/{id}', 'App\Http\Controllers\PersonalSiteDetailController@show')->name('themes/dashboard.siteinfo.show');


Route::put('/siteinfo/{id}', 'App\Http\Controllers\PersonalSiteDetailController@update')->name('personal_site_detail.update');

Route::get('/{name}', 'App\Http\Controllers\PersonalSiteDetailController@showlanding')->name('showlanding');


Route::get('/airtable/form', [AirtableController::class, 'showForm'])->name('airtable.form');
Route::post('/airtable/store', [AirtableController::class, 'store'])->name('airtable.store');
