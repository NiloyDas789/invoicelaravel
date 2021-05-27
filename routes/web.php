<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/register', function(){
	return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/profile', 'HomeController@profile')->name('profile');

Route::get('/home/bill-index', 'BillController@create')->name('bill-index');
Route::get('/home/bill/list', 'BillController@index')->name('bill.index');
Route::post('/home/bill-index', 'BillController@store')->name('bill.post');
Route::get('/home/bill/list/search', 'BillController@search')->name('live.search');
Route::get('/home/bill/list/{id?}', 'BillController@print')->name('billprint');
Route::post('/home/bill/trash', 'BillController@destroy')->name('trash');
Route::get('/home/bill/shipper', 'BillController@getAutocompleteData')->name('bill.shipper');
Route::get('/home/bill/reciever', 'BillController@getAutocompleteData2')->name('bill.reciever');

Route::post('/home/email', 'HomeController@email')->name('email.change');
Route::post('/home/contact', 'HomeController@contact')->name('contact.change');
Route::post('/home/password', 'HomeController@password')->name('password.change');
Route::post('/home/image/upload', 'HomeController@imageUpload')->name('image.upload');

Route::get('settings', 'SettingController@index')->name('settings.index');
Route::post('settings', 'SettingController@store')->name('settings.store');
Route::post('settings/{setting}', 'SettingController@update')->name('settings.update');

Route::resource('shipper', 'ShipperController');
Route::resource('reciever', 'RecieverController');