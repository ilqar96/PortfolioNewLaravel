<?php



Auth::routes();


Route::group(['as'=>'home.'],function (){
    Route::get('/', 'HomeController@index')->name('main');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/blog', 'HomeController@blog')->name('blog');
    Route::get('/contact', 'HomeController@contact')->name('contact');
});
    Route::redirect('/home', '/');


