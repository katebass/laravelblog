<?php

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

//Route::post('/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store')->name('login-post');
Route::get('/logout', 'SessionsController@destroy')->name('logout');


Route::get('about', function () {
    return view('about');
});

// Route::get('/users', function () {
// 	$users = DB::table('users')->latest()->get();

//     return view('users.index', compact('users'));
// });

// Route::get('/users/{user}', function ($id) {
// 	$user = DB::table('users')->find($id);
//     return view('users.show', compact('user'));
// });


Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');


// Route::get('/', function () {
// 	$items = ['item1', 'item2', 'item3'];
// 	$users = DB::table('users')->get();

//     return view('welcome', [
//     	'name' => 'Katya',
//     	'items' => $items,
//     	'users' => $users
//     ]);
// });
