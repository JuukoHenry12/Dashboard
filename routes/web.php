<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\SmsControllers;
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

Route::get('/', function () {
    return view('welcome');
});
// sms create
Route::resource('/sendsms', 'App\Http\Controllers\SmsController');

// webhook
Route::get('send-test-webhook', 'App\Http\Controllers\SendWebhookController@send')->name('send-test-webhook');


// BACKEND ROUTES
// Admin dashboard
Route::resource('/dashboard', 'App\Http\Controllers\BackEnd\DashboardController');
// Bookings
Route::resource('/bookings', 'App\Http\Controllers\BackEnd\BookingController');
// Feedbacks
Route::resource('/feedbacks', 'App\Http\Controllers\BackEnd\FeedbackController');
// Orders
Route::resource('/orders', 'App\Http\Controllers\BackEnd\OrderController');
// Food menu category
Route::resource('/foodmenu_categories', 'App\Http\Controllers\BackEnd\FoodMenuCategoryController');
// Food menu
Route::resource('/foodmenus', 'App\Http\Controllers\BackEnd\FoodMenuController');
// Drink menu category
Route::resource('/drinkmenu_categories', 'App\Http\Controllers\BackEnd\DrinkMenuCategoryController');
// Drink menu
Route::resource('/drinkmenus', 'App\Http\Controllers\BackEnd\DrinkMenuController');
// Gallery  category
Route::resource('/gallery_categories', 'App\Http\Controllers\BackEnd\GalleryCategoryController');
// Gallery
Route::resource('/galleries', 'App\Http\Controllers\BackEnd\GalleryController');
// Services category
Route::resource('/service_categories', 'App\Http\Controllers\BackEnd\ServiceCategoryController');
// Services
Route::resource('/services', 'App\Http\Controllers\BackEnd\ServiceController');
// Project category
Route::resource('/project_categories', 'App\Http\Controllers\BackEnd\ProjectCategoryController');
// Projects
Route::resource('/projects', 'App\Http\Controllers\BackEnd\ProjectController');
// Post category
Route::resource('/post_categories', 'App\Http\Controllers\BackEnd\PostCategoryController');
// posts
Route::resource('/posts', 'App\Http\Controllers\BackEnd\PostController');


// sms

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verifiedphone');
// Route::get('/home', 'HomeController@index')->name('home')->middleware('verifiedphone');
