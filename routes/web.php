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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('dashboard', function(){
	return view('admin.dashboard');
});

// Route::resource('','WelcomController');
Route::get('','WelcomController@index')->name('welcome.index');
Route::post('','WelcomController@store')->name('welcome.store');

// Route::get('dashboard','DashboardController@index')->name('admin.dashboard');

Route::resource('/slider','Admin\SliderController');



Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-user')->group( function(){
    Route::resource('/user','UserController',['except' =>['show','store','create']]);
    Route::resource('/about','AboutController');
    Route::resource('/pricing','PricingController');
    Route::resource('/beer','BeerController');
    Route::resource('/ourbeer','OurbeerController');
    Route::resource('/bread','BreadController');
    Route::resource('/ourbread','OurbreadController');
    Route::resource('/feature','FeatureController');
    Route::resource('/dish','DishController');
    Route::resource('/reservation','ReservationController');
    Route::resource('/contacts',"ContactController");



});
