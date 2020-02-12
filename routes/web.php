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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index','FrontendController@index')->name('index');
Route::get('/contact','FrontendController@contact')->name('contact');
Route::get('/project','FrontendController@project')->name('project');
Route::get('/aboutme','FrontendController@aboutme')->name('aboutme');
Route::get('/gallery','FrontendController@gallery')->name('gallery');
Route::post('/save_message','FrontendController@save')->name('save_message');
Route::get('/show_message','MessageController@show_message')->name('message');
Route::get('/cv','FrontendController@cv')->name('cv');



//blog Route
Route::group(['namespace'=>'blog'],function(){
Route::get('/blog','BlogController@index')->name('blog');
Route::get('/view/{slug}','BlogController@postview')->name('postview');
Route::get('/view/category','BlogController@Category')->name('category');
Route::get('/tag','BlogController@tag')->name('tag');
Route::get('/category/','BlogController@category')->name('category');
});
	
//Admin Route
Route::group(['namespace'=>'Admin'],function(){
	Route::get('/admin','DashboardController@index')->name('admin');
	Route::resource('admin/post','PostController');
	Route::resource('admin/category','CategoryController');
	Route::resource('admin/tag','TagController');
	Route::resource('admin/author','AuthorController');
	Route::resource('admin/document','DocumentController');
	Route::resource('admin/publish','PublishController');



	//Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
	//Route::post('admin-login','Auth\LoginController@login');
	
});



Route::get('/pdf','MessageController@index');
Route::get('/search','SearchController@search')->name('search');
