<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $this->call([
            LanguageSeeder::class,
            UserSeeder::class,
        ]);

        Post::factory()->count(rand(3,50))->create([
            'type' => 'reel'
        ]);
        Post::factory()->count(rand(3,50))->create([
            'type' => 'post'
        ]);
    }
}
