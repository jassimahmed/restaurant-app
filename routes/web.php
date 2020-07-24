<?php

use Illuminate\Support\Facades\Route;
use App\GeneralSetting;
use App\SocialSetting;
use App\SeoSetting;
use App\FoodCategory;
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
// Static pages
Route::get('/', 'StaticPagesController@home');
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');
Route::get('/about', 'StaticPagesController@about');
Route::get('/reservations', 'StaticPagesController@reservations');
Route::post('/reservations', 'StaticPagesController@registerreservation');
Route::get('/offers', 'StaticPagesController@offers');
Route::post('/offers', 'StaticPagesController@registermember');
Route::get('/offers/thank-you', 'StaticPagesController@offersthanks');
Route::get('/contact', 'StaticPagesController@contact');

// Admin tools
Route::get('/admin', 'admin\AdminController@dashboard');
Route::get('/admin/estimated-revenue-daily', 'admin\AdminController@dailyRevenueLast30');
Route::get('/admin/register', 'admin\AdminController@register');
Route::get('/admin/login', 'admin\AdminController@login');

// Admin food categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index')->middleware('role:Admin');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create')->middleware('role:Admin');
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store')->middleware('role:Admin');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit')->middleware('role:Admin');
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update')->middleware('role:Admin');
Route::delete('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete')->middleware('role:Admin');

// Admin food items
Route::get('/admin/food-items', 'admin\FoodItemsController@index')->middleware('role:Admin');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create')->middleware('role:Admin');
Route::post('/admin/food-items', 'admin\FoodItemsController@store')->middleware('role:Admin');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit')->middleware('role:Admin');
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update')->middleware('role:Admin');
Route::delete('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete')->middleware('role:Admin');

// Admin Settings
Route::get('/admin/settings/general', 'admin\SettingController@general')->middleware('role:Admin');
Route::put('/admin/settings/general', 'admin\SettingController@saveGeneral')->middleware('role:Admin');
Route::get('/admin/settings/seo', 'admin\SettingController@seo')->middleware('role:Admin');
Route::put('/admin/settings/seo', 'admin\SettingController@saveSeo')->middleware('role:Admin');
Route::get('/admin/settings/social-accounts', 'admin\SettingController@socialAccounts')->middleware('role:Admin');
Route::put('/admin/settings/social-accounts', 'admin\SettingController@saveSocialAccounts')->middleware('role:Admin');

// Admin users
Route::get('/admin/users', 'admin\UsersController@index')->middleware('role:Admin');
Route::get('/admin/users/create', 'admin\UsersController@create')->middleware('role:Admin');
Route::post('/admin/users', 'admin\UsersController@store')->middleware('role:Admin');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit')->middleware('role:Admin');
Route::put('/admin/users/{id}', 'admin\UsersController@update')->middleware('role:Admin');
Route::get('/admin/users/{id}/delete', 'admin\UsersController@delete')->middleware('role:Admin'); //delete can be done using 'post' and 'delete' (REST convention)

// Admin customers
// - Members
Route::get('/admin/members', 'admin\MembersController@index');
Route::delete('/admin/members/{id}/delete', 'admin\MembersController@delete');
// - Reservations
Route::get('/admin/reservations', 'admin\ReservationController@index');
Route::get('/admin/reservations/create', 'admin\ReservationController@create');
Route::post('/admin/reservations', 'admin\ReservationController@store');
Route::get('/admin/reservations/{id}/edit', 'admin\ReservationController@edit');
Route::put('/admin/reservations/{id}', 'admin\ReservationController@update');
Route::delete('/admin/reservations/{id}/delete', 'admin\ReservationController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// View settings
View::composer(['home', 'pages/about', 'pages/contact', 'pages/giftcards', 'pages/offers', 'pages/reservations', 'pages/thank-you', 'menu/all-categories', 'menu/single-menu', 'layouts/landing-page', 'layouts/admin', 'admin/login', 'auth/login'], function($view){
	$gs = GeneralSetting::find(1);
	$ss = SocialSetting::find(1);
	$seos = SeoSetting::find(1);
	$categories = FoodCategory::all();

	$view->with('settings', [
		'general' => $gs,
		'social' => $ss,
		'seo' => $seos,
	]);
	$view->with('categories', $categories);
});
