<?php

use Illuminate\Http\Request;


Route::post('click', 'Click\ClickController@store');

// get clicks count to feed chart on admin
Route::post('clickcount', 'Click\ClickController@getClicks');


Route::get('/getcategory/{id}', 'AjaxRequestsController@getCat');
Route::get('/getsubcategory/{id}', 'AjaxRequestsController@getSubCat');
Route::get('/getsubcategory2/{id}', 'AjaxRequestsController@getSubCat2');

Route::get('/getcat/{type}', 'AjaxRequestsController@getParent');

Route::get('/getloco/{id}', 'AjaxRequestsController@getLocation'); 