<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return 'Hello home';
});

Route::get('/laravel', function(){
    return view('laravel');
});