<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PageController@index')->name('home');
Route::get('/header','PageController@index')->name('header');
Route::get('/footer','PageController@index')->name('footer');
Route::get('/cards','PageController@index')->name('cards');

