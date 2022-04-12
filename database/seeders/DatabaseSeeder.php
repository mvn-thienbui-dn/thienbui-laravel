<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this::call([
            UserSeeder::class,
            ProfileSeeder::class,
            PostSeeder::class,
            CommentSeeder::class
        ]);
    }
}
