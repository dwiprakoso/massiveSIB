<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/home', function () {
    return view('home');
});