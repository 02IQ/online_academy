<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/python', 'App\Http\Controllers\MainController@python');
Route::post('/python', 'App\Http\Controllers\MainController@python_rewiew')->name('python'); //ОТЗЫВЫ ДЛЯ PYTHON

Route::get('/javascript', 'App\Http\Controllers\MainController@javascript');
Route::post('/javascript', 'App\Http\Controllers\MainController@javascript_rewiew')->name('javascript');//ОТЗЫВЫ ДЛЯ JAVASCRIPT

Route::get('/java', 'App\Http\Controllers\MainController@java');
Route::post('/java', 'App\Http\Controllers\MainController@java_rewiew')->name('java');//ОТЗЫВЫ ДЛЯ JAVA

Route::get('/c_sharpe', 'App\Http\Controllers\MainController@c_sharpe');
Route::post('/c_sharpe', 'App\Http\Controllers\MainController@c_sharpe_rewiew')->name('c_sharpe');//ОТЗЫВЫ ДЛЯ C#

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/registration', function () {
    return view('registration');
});
