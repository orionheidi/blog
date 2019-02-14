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


Route::resource('posts','PostController');
Route::get('/logout','LoginController@logout')->name('logout');
Route::post('posts/{id}/comments','PostController@addComment')->name('posts.comments');




// Route::get('posts','PostController@index');
// Route::get('posts/{id}','PostController@show');