<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/discuss', function () {
    return view('discuss');
});


Auth::routes();

Route::get('/forum', [

	'uses' => 'forumsController@index',
	'as' => 'forum'
]);

Route::get('{provider}/auth', [

	'uses' => 'socialController@auth',
	'as' => 'social.auth'

]);

Route::get('/{provider}/redirect', [

	'uses' => 'socialController@auth_Callback',
	'as' => 'social.callback'

]);

Route::group(['middleware' => 'auth'] , function(){

	Route::resource('channels' , 'ChannelController');

	Route::get('discussion/create' , [

		'uses' => 'DiscussionController@create',
		'as' => 'discussions.create'

	]);



    Route::post('discussions/store', [

        'uses' => 'DiscussionController@store',

        'as' => 'discussions.store'

    ]);

});
// Route::get('login/github/callback', 'socialController@auth_Callback');
