<?php



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
Route::get('/view/postcategory/{category}','FrontendController@viewbycategory')->name('viewbyCategory');


//blog Route
Route::group(['namespace'=>'blog'],function(){
Route::get('/blog','BlogController@index')->name('blog');
Route::get('/view/{slug}','BlogController@postview')->name('postview');
Route::get('/view/category','BlogController@Category')->name('category');
Route::get('/post_by_category/{id}','BlogController@post_by_category')->name('post_by_category');

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
	
});

Route::get('/pdf','MessageController@index');
Route::get('/search','SearchController@search')->name('search');
