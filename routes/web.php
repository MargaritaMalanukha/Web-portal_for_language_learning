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

/*
 * Routes for authorization/registration.
 */

Route::get('/register', 'App\Http\Controllers\Auth\RegistrationController@show_registration');
Route::post('/register', 'App\Http\Controllers\Auth\RegistrationController@register');

Route::get('/login', 'App\Http\Controllers\Auth\AuthController@show_login');
Route::post('/login', 'App\Http\Controllers\Auth\AuthController@login');

Route::get('/logout', 'App\Http\Controllers\Auth\AuthController@logout');

/*
 * Categories routes.
 */

Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/rooms', 'App\Http\Controllers\RoomController@index');
Route::get('/tests', 'App\Http\Controllers\TestController@index');
Route::get('/profile', 'App\Http\Controllers\ProfileController@index');

/*
 * Profile routes.
 */

Route::get('/profile/edit_name', 'App\Http\Controllers\ProfileController@edit_name');
Route::post('/profile/edit_name', 'App\Http\Controllers\ProfileController@update_name');
Route::get('/profile/edit_email_password', 'App\Http\Controllers\ProfileController@edit_email_password');
Route::post('/profile/edit_email_password', 'App\Http\Controllers\ProfileController@update_email_password');
Route::get('/profile/premium', 'App\Http\Controllers\ProfileController@premium');
