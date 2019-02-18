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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/posts',function(){
//     return view('posts.index');
// });

// Route::get('/posts/{id}',function(){
//     return view('posts.show');
// });

//ova grupa middleweara yabranjuje svima koji su u njoj da udju na te stranice

Route::group(['middleware' => ['guest']],function(){
    Route::get('/register',['as'=> 'show-register', 'uses' => 'RegisterController@create']);
    Route::post('/register','RegisterController@store')->name('register');
    Route::get('/login','LoginController@create')->name('show-register');
    Route::post('/login','LoginController@store')->name('login');
});

Route::group(['middleware' => ['auth']],function(){
    Route::get('/users/posts','UserController@index')->name('users.posts');
});


Route::resource('posts','PostController');
Route::get('/logout','LoginController@logout')->name('logout');
Route::post('posts/{id}/comments','CommentsController@store')->name('posts.comments');

Route::post('/posts/{postId}/comments', ['as' => 'comments-post', 'uses' => 'CommentsController@store']);
// Route::get('/posts/{id}','PostController@show')->name('posts.show');
// Route::get('posts','PostController@index');
// Route::get('posts/{id}','PostController@show');