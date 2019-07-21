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

use App\Main;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/dashboard", function () {
    return view('dashboard.pages.premiums');
});

Route::post('adminLogin', 'AuthController@adminLogin');
Route::get('adminLogout', 'AuthController@adminLogout');
Route::post('adminSignup','AuthController@adminSignup');

Route::get('users','UsersController@index');

Route::get('deleteUser/{id}','UsersController@deleteUser')->name('deleteUser');

Route::get("/login", function () {
    return view('dashboard.pages.users.login');
});


Route::get("/register", function () {
    return view('dashboard.pages.users.register');
});

Route::get("/main",'MainController@getMain');

Route::post('imageUpload','MainController@logoUpload');
