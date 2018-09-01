<?php

// For testing purposes
// Route::get('/test', 'TestController@index')->name('test');

// Route::get('/usa', function () {
// 	return view('dashboard.pages.userprofile');
// });

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

Route::get('/','HomeController@index')->name('home');
// Category 
Route::get('category/{slug}', [
	'uses' => 'PagesController@getCategory',
	'as' => 'category'
]);

//View All Services
Route::get('listed-services','ServiceDetails@indexall')->name('service'); 


// Terms and condition page 
Route::get('/terms', '\App\Http\Controllers\TermsController@index')->name('terms');

//About us
Route::get('/about', '\App\Http\Controllers\TermsController@aboutUs')->name('about');

// Route::get('/terms', [
// 	'uses' => 'TermsController@index',
// 	'as'   => 'terms'
// ]);


//get details of a service
Route::get('/details/{username}/{serslug}', [
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

// sales agent signup
Route::post('/salesagent-signup','Agent\AgentController@postSignup')->name('signup-sales');

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


/*
* Free Clicks Zone
*/

Route::get('get-clicks','Click\CreditController@create')->name('getClick');

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

		Route::get('product/add', [
			'uses' => 'ServiceController@getAddProduct',
			'as'   => 'addproduct'
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

Route::get('/profile/{slug}/products', [
	'uses' => '\App\Http\Controllers\ProfileController@getProducts',
	'as' => 'profile.products',
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


Route::get('/products', 'Actions\Product\ProductController@index')->name('product');


/*
|
| Admin Section Starts
|
*/
Route::get('dashboard', 'Admin\HomeController@index')->name('admin.home');
Route::get('admin/settings', 'Admin\SettingsController@site')->name('admin.settings.site');

Route::get('admin/users/all-users', 'Admin\UsersController@index')->name('admin.users');
Route::get('admin/users/subscribed-users', 'Admin\UsersController@getSubscribedUsers')->name('admin.subscribed-users');

Route::post('/admin/subscribe-user', 'Admin\AddClickController@create')->name('admin.sub');

Route::get('admin/agents', 'Admin\AgentsController@index')->name('admin.agents');
Route::get('admin/category', 'Admin\CategoryController@getCategory')->name('admin.category');
Route::get('admin/category/{category}', 'Admin\CategoryController@getCatDetail')->name('category.home');

Route::get('admin/user-details/{slug}', 'Admin\UsersController@show')->name('admin.users.details');


/*
|
| Admin Section Ends
|
*/

/*
|
| Agent Section Starts
|
*/
// sign up as a Sales agents 
Route::get('salesagents', 'Agent\AgentController@getPage')->name('salesagent.register');



Route::get('agents/{agent}', 'Agent\AgentController@index')->name('agent.register');
Route::post('agent-register', 'Agent\AgentController@store')->name('agent.pregister');


//get a sales agents profile only accessible to sales agents
Route::get('agent/{user}','Agent\AgentController@profile')->name('agent.profile')->middleware('salesAgent');

/*
|
| Agent Section Starts
|
*/

// Homepage Search
Route::get('/search', 'SearchController@getResult')->name('search.results');

// top bar search
Route::get('/quick-search', 'SearchController@search')->name('quick-search');

Route::get('/populate', 'Auth\PopulateController@index');


Route::post('/populate', 'Auth\PopulateController@store')->name('populate');


/**
 * NeW cAtegories routes
 */

Route::group(['prefix' => '/section'], function () {
	Route::get('/{cat}', 'CategoryController@getAll')->name('category.index');

	Route::group(['prefix' => '/{cat}'], function () {
		Route::get('/{category}', 'CategoryController@getSub')->name('category.index2');
	});
});