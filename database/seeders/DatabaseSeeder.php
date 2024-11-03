<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $myarticle = User::factory()->create([
            'name' => 'Dani Ramadhan',
            'username' => 'daniramadhan',
            'email' => 'daniramadhan170907@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        // Category::factory()->create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Post::factory()->create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut repellat labore natus. Voluptatum rerum maxime itaque, esse quisquam aspernatur accusamus fuga quasi vero? Non, quisquam? Excepturi itaque possimus fugiat repudiandae?'
        // ]);

        Post::factory(100)->recycle([
            Category::factory(3)->create(),
            $myarticle,
            User::factory(5)->create()
        ])->create();
    }
}

