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
Route::resource('/rooms', 'App\Http\Controllers\RoomController');
Route::get('/tests', 'App\Http\Controllers\TestController@test_stage_1');
Route::get('/profile', 'App\Http\Controllers\ProfileController@index');

/*
 * Profile routes.
 */

Route::get('/profile/edit_name', 'App\Http\Controllers\ProfileController@edit_name');
Route::post('/profile/edit_name', 'App\Http\Controllers\ProfileController@update_name');
Route::get('/profile/edit_email_password', 'App\Http\Controllers\ProfileController@edit_email_password');
Route::post('/profile/edit_email_password', 'App\Http\Controllers\ProfileController@update_email_password');
Route::get('/profile/premium', 'App\Http\Controllers\ProfileController@premium');
Route::get('/profile/edit_card', 'App\Http\Controllers\ProfileController@show_card');
Route::post('/profile/edit_card', 'App\Http\Controllers\ProfileController@changeCreditCard');
Route::get('/profile/premium/{description}', 'App\Http\Controllers\ProfileController@updatePremium');

/*
 * Testing stage routes.
 */

Route::post('/test_stage_1', 'App\Http\Controllers\TestController@test_stage_1');
Route::post('/test_stage_2', 'App\Http\Controllers\TestController@test_stage_2');
Route::post('/test_stage_3', 'App\Http\Controllers\TestController@test_stage_3');
Route::post('/home', 'App\Http\Controllers\HomeController@index');
