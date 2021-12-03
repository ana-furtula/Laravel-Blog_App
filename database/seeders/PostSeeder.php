<?php

namespace Database\Seeders;

use App\Models\Post;
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
        $post = new Post([
            'title' => 'Learning Laravel',
            'content'=> 'This blog post will help you learn Laravel'
        ]);
        $post->save();
        $post = new Post([
            'title' => 'Something else',
            'content'=> 'Some other content'
        ]);
        $post->save();
    }
}
