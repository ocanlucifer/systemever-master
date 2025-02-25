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

// HELPER
Route::get('/option/helper', 'Api\HelperController@optionHelper')->name('option-helper');
Route::post('/upload/helper', 'Api\HelperController@uploadHelper')->name('upload-helper');
Route::post('/multi-upload/helper', 'Api\HelperController@multiUploadHelper')->name('upload-helper-multiple');
Route::post('/midtrans/callback', 'Api\MidtransController@callback')->name('post.midtrans.callback');
Route::post('/survei/helper', 'Api\HelperController@survey')->name('post.survey.helper');
Route::post('/pagesetting/helper', 'Api\HelperController@pagesetting')->name('post.pagesetting.helper');
Route::post('/pagesetting/delete/helper', 'Api\HelperController@pagesettingdelete')->name('post.pagesetting.delete.helper');
// Route::post('/lang/{lang}', 'Api\HelperController@lang')->name('post.helper.lang');