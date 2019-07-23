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
//Route::post('adminSignup', 'AuthController@adminSignup');


Route::group(['middleware' => ['auth']], function () {

    Route::get('users', 'UsersController@index');

    Route::get('deleteUser/{id}', 'UsersController@deleteUser')->name('deleteUser');

    Route::get("/login", function () {
        return view('dashboard.pages.users.login');
    });


    Route::get("/register", function () {
        return view('dashboard.pages.users.register');
    });

    Route::get("/main", 'MainController@getMain');

    Route::post('imageUpload', 'MainController@logoUpload');

    Route::get('/sponsors', 'SponsorController@index');
    Route::get('/addSponsor', 'SponsorController@addSponsor');
    Route::post('/storeSponsor', 'SponsorController@storeSponsor');
    Route::get('/editSponsor/{id}', 'SponsorController@edit')->name('editSponsor');
    Route::post('/updateSponsor/{id}', 'SponsorController@updateSponsor');
    Route::get('/deleteSponsor/{id}', 'SponsorController@destroy')->name('deleteSponsor');
//dental sponsors
Route::get('/dentalSponsors','SponsorController@dentalSponsors');

    Route::get('/dentalSponsors', 'SponsorController@dentalSponsors');

//notifications
    Route::get('notifications', 'MainController@notifications');
    Route::get('notificationShow', 'MainController@notificationShow');
    Route::post('notificationStore', 'MainController@notificationStore');
    Route::get('deleteNotification/{id}', 'MainController@deleteNotification')->name('deleteNotification');
});




