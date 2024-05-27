<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        Post::factory(10)->create()->each(function ($post) {
            Post::factory(4)->create([
                'parent_id' => $post->id,
                'excerpt' => null,

            ])->each(function ($childPost) {
                Post::factory(2)->create([
                    'parent_id' => $childPost->id,
                    'excerpt' => null,

                ]);
            });
        });


    }
}
