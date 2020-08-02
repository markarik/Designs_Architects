<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.welcome');
});

Auth::routes();

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');


//    Route::get('/','DashboardController@index')->name('index');
    Route::get('/icons','IconsController@index')->name('icon.index');
    Route::get('/carousel','CarouselController@index')->name('carousel.index');
    Route::post('/carousel','CarouselController@store')->name('carousel.store');
    Route::get('/profile','ProfileController@index')->name('profile.index');
    Route::get('/tables','TableController@index')->name('table.index');

});




//Route::prefix('/dashboard')->name('dashboard.')->namespace('Dashboard')->group(function () {
//
//    Route::namespace('Auth')->group(function (){
//
//        Route::get('/login','LoginController@showLoginForm')->name('login.showLoginForm');
//        Route::post('/login','LoginController@login')->name('login.post');
//        Route::get('/register','RegisterController@showForm')->name('register.showForm');
//
//    });
//    Route::get('/','DashboardController@index')->name('index');
//    Route::get('/icons','IconsController@index')->name('icon.index');
//    Route::get('/map','MapController@index')->name('map.index');
//    Route::get('/profile','ProfileController@index')->name('profile.index');
//    Route::get('/tables','TableController@index')->name('table.index');
//});