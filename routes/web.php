<?php

// For testing purposes
// Route::get('/test', 'TestController@index')->name('test');

// ends here
/*
|
| Payment Section 
|
*/

Route::post('/payciite', 'Payment\PaymentController@redirectToGateway')->name('pay');

Route::get('/payment/callback', 'Payment\PaymentController@getPayDetails');


// Homepage
Route::get('/', [
	'uses' => 'HomeController@index',
	'as'   => 'home'
]);

// Category 
Route::get('category/{slug}', [
	'uses' => 'PagesController@getCategory',
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


Route::get('/redirect/{service}','SocialAuthController@redirect');
Route::get('/{service}/callback','SocialAuthController@callback');


/*
|
| Authentication Section Ends
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

	Route::get('request/state/location/{id}', [
		'uses' => 'AjaxRequestsController@getLocation'
	]);
	Route::get('request/category/getscat/{id}', [
		'uses' => 'AjaxRequestsController@getSubCat'
	]);


	Route::get('category/category-h/state/{id}', [
		'uses' => 'AjaxRequestsController@getLocation'
	]);

	Route::get('category/category-h/scat/{id}', [
		'uses' => 'AjaxRequestsController@getSubCat'
	]);


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
		/*
		 * Profile Picture


		*/
	
		Route::post('/profile/editpicture', [
			'uses' => 'ProfileController@updatePic',
			'as'   => 'profile-pic'
		]);



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


			//edit service route
			Route::post('service-edit/edit/{id}',[
				'uses' => 'ServiceController@postServiceUpdate',
				'as'   => 'service.edit'
			]);

			Route::delete('service-delete/delete/{id}',[
				'uses' => 'ServiceController@getDeleteService',
				'as'   => 'service.delete'
			]);
});



/*
|
| Subscription Section Starts
|
*/

Route::get('subscription', [
	'uses' => '\App\Http\Controllers\SubController@index',
	'as'   => 'getSubs'
]);

// Route::get('subscription/{plan}', [
// 	'uses' => '\App\Http\Controllers\SubController@show',
// 	'as'   => 'plan.show'
// ]);
/*
|
| Subscription Section ends
|
*/




/*
|
| Profile Section Starts
|
*/
// User Profile 
// AuthCheck:: ensures that this route isnt accessible to not loggd in users
Route::post('/profile/edit', [
	'uses' => '\App\Http\Controllers\ProfileController@postEditProfile',
	'as'   => 'profile.edit',

]);


Route::get('/profile/edit', [
	'uses' => '\App\Http\Controllers\ProfileController@getEditProfile',
	'as'   => 'profile.edit',

]);


Route::get('/profile/{slug}', [
	'uses' => '\App\Http\Controllers\ProfileController@getProfile',
	'as'   => 'profile.index'
]);

Route::get('/profile/{slug}/services', [
	'uses' => '\App\Http\Controllers\ProfileController@getService',
	'as' => 'profile.service',
]);


// Requests Section
Route::get('/profile/{slug}/requests', [
	'uses' => '\App\Http\Controllers\RequestController@getRequest',
	'as' => 'profile.request',
]);


Route::get('/request/add', [
	'uses' => '\App\Http\Controllers\RequestController@getRequestAdd',
	'as' => 'request.add',
]);


Route::post('/request/add', [
	'uses' => '\App\Http\Controllers\RequestController@postRequest',
	'as' => 'request.add',
]);


/*
|
| Profile Section Ends
|
*/

/*
|
| Profile Section Ends
|
*/


// Admin
Route::get('adminsignin', [
	'uses' => '\App\Http\Controllers\AdminController@dashboardSignin',
	'as' => 'signadmin',
]);

Route::get('dashboard', [
	'uses' => '\App\Http\Controllers\AdminController@index',
	'as' => 'dashboard',
]);