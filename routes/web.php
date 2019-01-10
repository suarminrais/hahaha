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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/','Home@index')->name('home');
Route::get('/item/{id}', 'Home@show')->name('item');
Route::get('/{id}', 'Home@updat')->name('home.updat'); 
Route::put('/{id}', 'Home@update')->name('home.update'); 
// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('artis')->group(function () {
	//artis
		Route::get('/home', 'HomeController@index')->name('home');
		Route::get('/post', 'HomeController@post')->name('artis.post'); 
		Route::get('/payments', 'HomeController@pay')->name('artis.pay');
		Route::get('/rating', 'HomeController@rate')->name('artis.rate');
		Route::get('/profile', 'HomeController@profile')->name('artis.profile');
		Route::get('/message', 'HomeController@message')->name('artis.message');
		Route::post('/pesan/', 'HomeController@pesanPost')->name('pesan.pos');
		Route::get('/message/{id}', 'HomeController@messageDet')->name('artis.message.det');
		Route::put('/tolak/{id}', 'HomeController@tolak')->name('tolak');

		//post item artis
		Route::post('/post', 'PostController@store')->name('post.art');  
		Route::get('/{id}/edit', 'PostController@edit')->name('post.edit');
		Route::put('/{id}', 'PostController@update')->name('post.update');;
		Route::delete('/{id}', 'PostController@destroy')->name('artis.delete');
		Route::get('/profil/{id}', 'Home@profil')->name('artis.profil');
		Route::put('/profile/{name}', 'HomeController@profileanu')->name('artis.profilee');
});

Route::prefix('order')->group(function () {
		//order
		Route::post('/', 'OrderController@proses')->name('order');
		Route::get('/pembayaran/{id}', 'OrderController@bayar')->name('bayar'); 
		Route::put('/pembayaran/{id}', 'OrderController@bayarful')->name('bayar.full');  
		Route::get('/{id}', 'OrderController@order')->name('order.data'); 
		Route::put('/{id}', 'OrderController@update')->name('order.update');  
});

Route::prefix('buyer')->group(function () {

		//buyer
		Route::post('/pesan/', 'BuyerController@pesanPost')->name('pesan.post');
		Route::get('/message', 'BuyerController@message')->name('buyer.message');
		Route::get('/pembayaran/{id}', 'BuyerController@bayar')->name('buyer.bayar');
		Route::put('bayar/{id}', 'OrderController@updat')->name('order.updat'); 
		Route::get('/rating/{id}', 'BuyerController@rating')->name('buyer.rating');
		Route::post('/rating/{post_id}', 'UlasanController@rate')->name('ulas');
		Route::get('/profile/{id}', 'BuyerController@profile')->name('buyer.profile');
		Route::put('/profile/{id}', 'BuyerController@profileanu')->name('buyer.profilee');
		Route::get('/pesan/{by}', 'BuyerController@pesan')->name('pesan');
		Route::get('/message/{id}', 'BuyerController@messageDet')->name('buyer.message.det');
});