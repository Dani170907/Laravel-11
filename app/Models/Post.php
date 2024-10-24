<?php

namespace App\Models;

class Post {
    public static function all() {
        return [
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
                        Animi quibusdam ex sed laboriosam alias error quia
                    ex quam doloribus ullam quia soluta illo, exercitationem nulla aliquid quisquam quasi? Deleniti, ipsa.'
            ]
        ];
    }
}