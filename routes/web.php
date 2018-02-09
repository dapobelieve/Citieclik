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
// ends here

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

// Terms and condition page 
Route::get('/terms', '\App\Http\Controllers\TermsController@index')->name('terms');

//About us
Route::get('/about', '\App\Http\Controllers\TermsController@aboutUs')->name('about');

// Route::get('/terms', [
// 	'uses' => 'TermsController@index',
// 	'as'   => 'terms'
// ]);


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

Route::get('/confirm/{token}','Emails\Confirm@getEmailToken')->name('email.token');

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

// the request page form
Route::get('/request/add',
	'\App\Http\Controllers\RequestController@getRequestAdd')
	->name('request.add');

// /add request
Route::post('/request/add',
	'\App\Http\Controllers\RequestController@postRequest')
	->name('request.add');


// go to a particular request
Route::get('/requests/{serviceRequest}',
	'\App\Http\Controllers\RequestController@show')
	->name('request.show');


/*
|
| Comments Section Starts
|
*/

Route::post('/comment','Comments\CommentController@store')->name('comment');


// Ends Here





/*
|
| Admin Section Starts
|
*/
Route::get('dashboard', 'Admin\HomeController@index')->name('admin.home');
Route::get('admin/settings', 'Admin\SettingsController@site')->name('admin.settings.site');
Route::get('admin/users', 'Admin\UsersController@index')->name('admin.users');

/*
|
| Admin Section Ends
|
*/

// Homepage Search
Route::get('/search', 'SearchController@getResult')->name('search.results');
