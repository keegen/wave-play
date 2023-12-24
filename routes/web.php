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
use App\Http\Controllers\LeadController;
use App\Http\Controllers\UserThemeController;
use App\Http\Controllers\ReviewController;

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

Route::get('/inventory', 'App\Http\Controllers\PersonalSiteDetailController@showInventory')->name('personal_site_detail.showInventory');
Route::post('/inventory', 'App\Http\Controllers\PersonalSiteDetailController@storeInventory')->name('personal_site_detail.storeInventory');


Route::get('themes/{num}', 'App\Http\Controllers\ThemeControler@show');
Route::get('/siteinfo', 'App\Http\Controllers\PersonalSiteDetailController@create')->name('themes/dashboard.siteinfo');
Route::get('/siteinfo/create', 'App\Http\Controllers\PersonalSiteDetailController@create')->name('personal_site_detail.create');
Route::post('/siteinfo', 'App\Http\Controllers\PersonalSiteDetailController@store')->name('personal_site_detail.store');
Route::get('/siteinfo/{id}', 'App\Http\Controllers\PersonalSiteDetailController@show')->name('themes/dashboard.siteinfo.show');

Route::put('/siteinfo/{id}', 'App\Http\Controllers\PersonalSiteDetailController@update')->name('personal_site_detail.update');


Route::get('dashboard', 'App\Http\Controllers\DashboardController@dashboard')->name('dashboard');
Route::get('/{name}', 'App\Http\Controllers\PersonalSiteDetailController@showlanding')->name('showlanding');


Route::get('/airtable/form', [AirtableController::class, 'showForm'])->name('airtable.form');
Route::post('/airtable/store', [AirtableController::class, 'store'])->name('airtable.store');

Route::post('/store-lead', 'App\Http\Controllers\PersonalSiteDetailController@storeLead')->name('store-lead');

Route::middleware(['auth'])->group(function () {
Route::post('/lead/{lead}/update', 'App\Http\Controllers\LeadController@updateLead')->name('updateLead');
Route::get('/lead/{lead}/details', 'App\Http\Controllers\LeadController@show')->name('lead.details');
Route::post('/lead/{lead}/details', 'App\Http\Controllers\LeadController@update')->name('lead.update');
});


// Display themes for selection
Route::get('/theme/select', 'App\Http\Controllers\UserThemeController@selectTheme')->name('theme.select');

// Store user's theme selection
Route::post('/theme/store', 'App\Http\Controllers\UserThemeController@storeTheme')->name('theme.store');

Route::post('{personalSiteDetail}/reviews', [ReviewController::class, 'store'])->name('reviews.store');

