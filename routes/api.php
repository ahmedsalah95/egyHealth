<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
   // return $request->user();

});*/


Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logoUpload', 'MainController@logoUpload');

    //Route::post('adminLogin', 'AuthController@adminLogin');

    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
        Route::get('getMainApi', 'MainController@getMainApi');
        Route::get('getAllSponsorsApi','SponsorController@getAllSponsorsApi');
        Route::post('visitor','VisitorsController@store');
        Route::get('visitor','VisitorsController@index');
        Route::post('exhibitor','ExhibitorsController@store');
        Route::get('exhibitor','ExhibitorsController@index');
    });
});







