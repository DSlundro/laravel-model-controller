<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PageController@index')->name('home');
Route::get('/components/header','PageController@index')->name('header');
Route::get('/partials/cards','PageController@index')->name('cards');
Route::get('/components/footer','PageController@index')->name('footer');
