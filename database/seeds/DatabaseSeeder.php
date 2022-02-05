<?php

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(UserSeeder::class);
        //factory(App\Category::class,5)->create();

        Category::factory()->count(5)->make();
        Tag::factory(8)->create();
        Post::factory(100)->create();
        $this->call(PostSeeder::class);
    }
}
