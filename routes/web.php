<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Auth\Authenticatable;

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

//make routing easy and good looking



Auth::routes();


Route::get('/', 'DashboardController@show');
Route::get('/reports', 'DashboardController@reports');
Route::post('/reports', 'ReportsController@create');
Route::get('/profile', 'DashboardController@profile');
Route::patch('/profile', 'DashboardController@EditProfile');
Route::get('/add-user', 'UserController@index');
Route::post('/add-user', 'UserController@create');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('login');
});