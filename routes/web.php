<?php



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::redirect('/home', '/');





Route::get('/test/{id?}', 'TestController@index')->name('test');
