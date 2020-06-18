<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'OminiController@index')->name('home');

Route::get('/omino/{id}', 'OminiController@show')->name('showOmino');

Route::get('/omino/delete/{id}', 'OminiController@delete')->name('deleteOmino');

Route::get('/create', 'OminiController@create')->name('create');

Route::post('/store', 'OminiController@store')->name('store');

Route::get('/omino/edit/{id}', 'OminiController@edit')->name('editOmino');

Route::post('/omino/update/{id}', 'OminiController@update')->name('update');


