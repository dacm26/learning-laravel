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
Route::get('login','SessionsController@create');
Route::get('logout','SessionsController@destroy');
//Route::resource('users','UsersController');
Route::resource('sessions','SessionsController');
Route::get('admin',function(){
    return 'Admin Page';
})->before('auth');

/*
Route::get('users',function(){
  
  $users = User::all();
  
  return View::make('users/index')->withUsers($users);
});


Route::get('users/{username}',function($username){
  
  $user = User::whereUsername($username)->first();
  
  return View::make('users/show')->withUser($user);
});


Route::get('/', function()
{
  /* Sin usar eloquent
  $users = DB::table('users')->get();
  $user = DB::table('users')->find(1);
  //dd($user);
  $users = DB::table('users')->where('username','!=','Daniel')->get();
  */
   
   /*Usando Eloquent*/
/*
  $users = User::where('username','!=','Daniel')->get();
  /* find 
    $user = User::find(1);
  */
  /* create
  $user= new User;
  $user->username = 'NewUser';
  $user->password = Hash::make('password');
  $user->save();*/
  /*delete
    $user = User::find(1);
    $user->delete();
  */
  
  /*create
  User::create([
    'username' => 'AnotherUser',
    'password' => Hash::make('1234')
  ]);*/
  
  /*
  return User::orderBy('username','asc')->take(2)->get(); 
});*/

Route::get('/', function()
{
	return View::make('hello');

});
