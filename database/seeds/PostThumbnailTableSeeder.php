<?php

use \App\Post;
use Illuminate\Database\Seeder;

class PostThumbnailTableSeeder extends Seeder
{
	

    /**
     * Seed the tags table
     */
    public function run()
    {
    	$max = 30; 

        foreach(Post::all() as $post){

        	if($post->id < $max){
        		$post->thumb_url = '/uploads/post/'.$post->id.'.jpg';
        		$post->save();
        	}
        	else{
        		// $post->thumb_url('/uploads/post/'.$post->id.'.jpg');	
        	}
        }
    }
}
