<?php

Route::get('/test',[
	'uses' => 'TestController@index',
	'as'   => 'test'

]);


// Homepage
Route::get('/', [
	'uses' => 'HomeController@index',
	'as'   => 'home'
]);

// Category 
Route::get('category', [
	'uses' => 'CategoryController@index',
	'as' => 'category'
]);

//View All Services
Route::get('service', [
	'uses' => 'ServiceController@index',
	'as'   => 'service'
]);


//get details of a service
Route::get('service/detail/{username}/{serslug}', [
	'uses' => '\App\Http\Controllers\ServiceDetails@index',
	'as'   => 'service.detail'

]);



/*
|
| Authentication Section
|
*/

Route::get('/signup',[
	'uses' => '\App\Http\Controllers\AuthController@getSignup',
	'as'   => 'signup',
	'middleware' => ['guest']
]);

Route::post('/signup', [
	'uses' => '\App\Http\Controllers\AuthController@postSignup',
	'as'   => 'auth.signup',
	'middleware' => ['guest'],
	]);

Route::post('/signin', [
	'uses' => '\App\Http\Controllers\AuthController@postSignin',
	'as'   => 'auth.signin',
	'middleware' => ['guest'],
	]);

Route::get('/signout', [
	'uses' => '\App\Http\Controllers\AuthController@getSignout',
	'as'  =>  'auth.signout'
	]);


/*
|
| Authentication Section Ends
|
*/

/*
|
| Authentication Section For Users
|
*/

Route::group(['middleware' => ['AuthCheck']], function () {

/*
|
| Add Service
|
*/
Route::get('service/add', [
	'uses' => 'ServiceController@getAddService',
	'as'   => 'addservice'
]);

Route::post('service/add', [
	'uses' => 'ServiceController@postService',
	'as'   => 'addservice'
]);
/*
|
| Add Service Ends Here
|
*/

/*
|
| Ajax Requests Section
|
*/
	//Route to get lgas based on selected state
	Route::get('service/state/location/{id}', [
		'uses' => 'AjaxRequestsController@getLocation'
	]);
	//Route to get subcategory based on selected category
	Route::get('service/category/getscat/{id}', [
		'uses' => 'AjaxRequestsController@getSubCat'
	]);


	Route::get('service-edit/edit/state/{id}', [
		'uses' => 'AjaxRequestsController@getLocation'
	]);

	Route::get('service-edit/edit/category/{id}', [
		'uses' => 'AjaxRequestsController@getSubCat'
	]);


/*
|
| Ajax Requests Section Ends Here
|
*/

/*
|
| Modify Service Route
|
*/

	Route::get('service-edit/edit/{id}',[
		'uses' => 'ServiceController@getEditService',
		'as'   => 'service.edit'
	]);

	Route::delete('service-delete/delete/{id}',[
		'uses' => 'ServiceController@getDeleteService',
		'as'   => 'service.delete'
	]);

});









/*
|
| Profile Section Starts
|
*/
// User Profile 
Route::get('/profile/{slug}', [
	'uses' => '\App\Http\Controllers\ProfileController@getProfile',
	'as'   => 'profile.index'
]);

Route::get('/account', [
	'uses' => '\App\Http\Controllers\ProfileController@getAccount',
	'as' => 'profile.address',
]);
Route::get('/profile/{slug}/services', [
	'uses' => '\App\Http\Controllers\ProfileController@getService',
	'as' => 'profile.service',
]);
Route::get('/profile/{slug}/requests', [
	'uses' => '\App\Http\Controllers\ProfileController@getRequests',
	'as' => 'profile.request',
]);

/*
|
| Profile Section Ends
|
*/
