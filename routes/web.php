<?php

// $stripe = App::make('App\Billing\Stripe');

// dd($stripe);

// Route::get('/', function () {
//     $tasks = DB::table('tasks')->get();

//     return view('welcome', compact('tasks'));
// })->name('home');

// Route::get('/tasks', 'TasksController@index');

// Route::get('/tasks/{task}', 'TasksController@show');


// Route::get('about', function () {
//     return view('about');
// });

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');