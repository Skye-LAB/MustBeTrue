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

Auth::routes();

Route::get('home', 'HomeController@index');
Route::get('admin', 'HomeController@admin');
Route::post('create', 'HomeController@create')->name('create');
Route::resources([
    'admin/menu' => 'MenuController',
    'admin/employee' => 'EmployeeController'
]);
