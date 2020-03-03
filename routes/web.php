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

Route::get('/', 'HomeController@index')->name('home');
Route::get('cart', 'HomeController@showCart');
Auth::routes();

Route::get('home', 'HomeController@index');
Route::post('create', 'HomeController@create')->name('create');
Route::group(['middleware' => ['auth', '!admin:admin']], function () {
    Route::get('admin', 'HomeController@admin');
    Route::resources([
        'admin/menu' => 'MenuController',
        'admin/employee' => 'EmployeeController'
    ]);
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('order/menu/{menu}', 'HomeController@showMenu');
    Route::post('order/ajax/{menu}', 'HomeController@ajaxGet');
    Route::post('order/{menu}', 'HomeController@order');
});
