<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Dani Ramadhan']);
});

Route::get('/blog', function () {
    return view('blog', ['nama' => 'Dani Ramadhan']);
});

Route::get('/contact', function () {
    return view('contact', ['nama' => 'Dani Ramadhan']);
});
