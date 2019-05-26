<?php

use Illuminate\Http\Request;

/*php
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

Route::apiResources(['user' => 'API\UserController']);
Route::get('profile', 'API\UserController@profile');
Route::get('findUser', 'API\UserController@search');
Route::get('findberita', 'API\BeritaController@search');
Route::get('findotomotif', 'API\AutomotifController@search');
Route::get('findtrade', 'API\TradeController@search');
Route::get('findmining', 'API\MiningController@search');
Route::put('profile', 'API\UserController@updateProfile');
Route::apiResources(['slider' => 'API\SliderController']);
Route::apiResources(['berita' => 'API\BeritaController']);
Route::apiResources(['partner' => 'API\PartnerController']);
Route::apiResources(['karir' => 'API\KarirController']);
Route::apiResources(['test' => 'API\TestDriveController']);
Route::apiResources(['come' => 'API\ComeController']);
Route::apiResources(['lamar' => 'API\ControllerPelamar']);
Route::apiResources(['otomotif' => 'API\AutomotifController']);
Route::apiResources(['trade' => 'API\TradeController']);
Route::apiResources(['mining' => 'API\MiningController']);
Route::apiResources(['property' => 'API\Property']);
Route::get('drive', 'API\TestDriveController@index2');
Route::get('coming', 'API\ComeController@index2');
Route::get('pelamar', 'API\ControllerPelamar@index2');


