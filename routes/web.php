<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Dani Ramadhan',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo nostrum unde, 
                        harum dolor, obcaecati similique expedita ex quam doloribus ullam quia soluta illo, 
                        exercitationem nulla aliquid quisquam quasi? Deleniti, ipsa.'

        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Dani Ramadhan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Animi quibusdam ex sed laboriosam alias error quia! Eius quo enim minus eos fugiat non dolorum dignissimos ad atque, 
                        voluptatem maiores ratione?'

        ]
    ]]);
});

Route::get('/posts/{id}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Dani Ramadhan',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo nostrum unde, 
                        harum dolor, obcaecati similique expedita ex quam doloribus ullam quia soluta illo, 
                        exercitationem nulla aliquid quisquam quasi? Deleniti, ipsa.'

        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Dani Ramadhan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Animi quibusdam ex sed laboriosam alias error quia! Eius quo enim minus eos fugiat non dolorum dignissimos ad atque, 
                        voluptatem maiores ratione?'

        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Dani Ramadhan','title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
