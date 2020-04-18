<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::get('/ideas', 'IdeasController@index')->name('ideas.index');
Route::post('/ideas', 'IdeasController@store')->name('ideas.store');
