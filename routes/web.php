<?php
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Homepage
Route::get('/', [
	'uses' => 'HomeController@index',
	'as'   => 'home'
]);

// Category 
Route::get('category', [
	'uses' => 'CategoryController@index',
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
	'as'  =>  'auth'
	]);

/*
|
| Authentication Section Ends
|
*/

/*
|
| Profile Section Starts
|
*/
// User Profile 
Route::get('/profile', [
	'uses' => '\App\Http\Controllers\ProfileController@index',
	'as' => 'profile.account',
]);
Route::get('/account', [
	'uses' => '\App\Http\Controllers\ProfileController@getAccount',
	'as' => 'profile.address',
]);