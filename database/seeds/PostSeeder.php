<?php

use App\Image;
use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $posts = Post::factory(100)->create();

        foreach($posts as $post){
            
            Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class,
            ]);
        }
    }
}
