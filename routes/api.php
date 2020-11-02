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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

      /**
      * Auth Api's
      */

	  Route::post('/send/otp','Api\AuthController@sendOtp');
	  Route::post('/resent/otp','Api\AuthController@reSendOtp');
	  Route::post('/verify/otp','Api\AuthController@verifyOtp');
 	  Route::get('/get/profile','Api\AuthController@getProfile');

    Route::post('/register','Api\AuthController@register');
    Route::post('/update/profile','Api\AuthController@updateProfile');

    Route::post('/change/password','Api\AuthController@changePassword');
    Route::post('/forgot/password','Api\AuthController@forgatePassword');

    Route::get('/get/categories','Api\AuthController@getCategories');
    Route::get('/get/ads','Api\AuthController@getAds');
    Route::post('/make/bid','Api\AuthController@makeBid');
    Route::get('/get/bid','Api\AuthController@getBid');
    Route::post('/accept/bid','Api\AuthController@acceptBid');


    
      




      
      

      

      

      

      

    


