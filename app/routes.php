<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// routes for count in the landing page
Route::get('players','PlayersController@index');

Route::get('owners','TeamOwnerContoller@index');

Route::get('/','AuthController@signIn');



Route::get('admin_register', function()
{
	return View::make('register');
});


// SignUp View
Route::get('signup','AuthController@signUp');

// Create Account Route
Route::post('account', ['as' => 'account', 'uses' => 'AuthController@createAccount']);
// Sign In Route
Route::get('signin', ['as' => 'signin', 'uses'=> 'AuthController@signIn']);
// Login Route
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
// Logout
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

Route::get('all', ['as' => 'all', 'uses'=> 'AuthController@signIn']);

Route::get('dash', function()
{
	return View::make('pages.dashboard');
});

Route::post('register', ['as' => 'register', 'uses' => 'TeamOwnerContoller@create']);
Route::get('all', function()
{
	$users=Owner::all();
	return View::make('pages.all')->with('users',$users);
});
//search function route
Route::get('search',
  array('as' => 'search', 'uses' => 'TeamOwnerContoller@search'));
Route::get('search',
  array('as' => 'search', 'uses' => 'PlayersController@search'));

Route::resource('users', 'TeamOwnerContoller');
Route::get('index', function()
{
	
	return View::make('players.index');
});

Route::get('index', ['as' => 'index', 'uses'=> 'PlayersController']);


Route::resource('players','PlayersController');


//route for team
Route::resource('teams' ,'TeamController');

Route::get('team', function()
{
	//$users=Owner::all();
	return View::make('.team');
});

//view teams routes
Route::get('view','TeamController@index');

//password reminder routes
Route::get('password/reset', array(
  'uses' => 'PasswordController@remind',
  'as' => 'password.remind'
));



Route::get('player_registration', function()
{
	return View::make('player_reg');
});
Route::get('team_registration', function()
{
	return View::make('team_reg');
});



// Route::get('players_details','PlayersController@view_players');


//routes for viewing all registerd teams and players
Route::get('view','TeamOwnerContoller@view');
//view players routes
Route::get('view_players','PlayersController@view_players');




Route::resource('players', 'PlayersController');


//getting data in dropdown routes hereRoute::get('create', function()
Route::get('player_registration', function()
{
	$teams = Owner::all();
	return View::make('player_reg',compact('teams',$teams));
});

//verification routes
Route::get('verification', function()
{
	$players = Player::all();
	return View::make('verification')->with('players',$players);
});


