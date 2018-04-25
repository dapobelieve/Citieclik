<?php

use Illuminate\Http\Request;


Route::post('click', 'Click\ClickController@store');


Route::get('/getcategory/{id}', 'AjaxRequestsController@getSubCat');