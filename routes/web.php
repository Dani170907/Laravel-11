<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Dani Ramadhan','title' => 'About Page']);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
