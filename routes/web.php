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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

//we are going to implement the following mentods in controller PagesController. So comment out them now
/*
Route::get('/about/', function(){
	return view('pages.about');
});

Route::get('/about/{id}', function($id){
	return view('pages.about', ['id' => $id]);
});
*/

//do not return veiw from routes, always return them from controllers
