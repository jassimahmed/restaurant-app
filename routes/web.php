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
Route::get('/admin/register', 'admin\AdminController@register');
Route::get('/admin/login', 'admin\AdminController@login');

// Admin food categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update');
Route::delete('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete');

// Admin food items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');
Route::post('/admin/food-items', 'admin\FoodItemsController@store');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update');
Route::delete('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete');

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

// Admin Settings
Route::get('/admin/settings/general', 'admin\SettingsController@general');
Route::post('/admin/settings/general', 'admin\SettingsController@saveGeneral');
Route::get('/admin/settings/seo', 'admin\SettingsController@seo');
Route::post('/admin/settings/seo', 'admin\SettingsController@saveSeo');
Route::get('/admin/settings/social-accounts', 'admin\SettingsController@socialAccounts');
Route::post('/admin/settings/social-accounts', 'admin\SettingsController@saveSocialAccounts');

// Admin users
Route::get('/admin/users', 'admin\UsersController@index');
Route::get('/admin/users/create', 'admin\UsersController@create');
Route::post('/admin/users', 'admin\UsersController@store');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');
Route::put('/admin/users/{id}', 'admin\UsersController@update');
Route::get('/admin/users/{id}/delete', 'admin\UsersController@delete'); //delete can be done using 'post' and 'delete' (REST convention)

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
