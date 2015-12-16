<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostThumbnailTableSeeder extends Seeder
{
    /**
     * Seed the tags table
     */
    public function run()
    {
        foreach(Post::all $post){
        	$post->thumb_url('/uploads/post/'.$post->id.'.jpg');
        }
    }
}
