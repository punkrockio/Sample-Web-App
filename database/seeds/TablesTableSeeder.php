<?php

use \App\Table;
use Illuminate\Database\Seeder;

class TablesTableSeeder extends Seeder
{
	

    /**
     * Seed the tags table
     */
    public function run()
    {
    	Table::truncate();
        Table::create([
            'name' => 'users',
            'sheetsu_url' => 'https://sheetsu.com/apis/f3b4ef5f',
            'google_url' => 'https://docs.google.com/spreadsheets/d/1aERPe066OVhzt4vTVpo3e_F9y0OhFmiktBp3UmL7PvQ/edit#gid=0'
        ]);

        Table::create([
            'name' => 'posts',
            'google_url' => 'https://docs.google.com/spreadsheets/d/1AQwg3T-krYmJjmu-dEX8ql8AS8H65tLqF7y9DVBXrpg/edit#gid=0',
            'sheetsu_url' => 'https://sheetsu.com/apis/d2cc733e'
        ]);

        Table::create([
            'name' => 'user_friend_pivot',
            'google_url' => 'https://docs.google.com/spreadsheets/d/1_sLyWSV38lVrueCIZPjBxy5rLbcrQcX8tyynuS-8cYk/edit#gid=0',
            'sheetsu_url' => 'https://sheetsu.com/apis/c3684899'
        ]);

    }
}

/*
users
https://sheetsu.com/apis/f3b4ef5f
https://docs.google.com/spreadsheets/d/1aERPe066OVhzt4vTVpo3e_F9y0OhFmiktBp3UmL7PvQ/edit#gid=0

posts
https://docs.google.com/spreadsheets/d/1AQwg3T-krYmJjmu-dEX8ql8AS8H65tLqF7y9DVBXrpg/edit#gid=0
https://sheetsu.com/apis/d2cc733e

user_friend_pivot
https://sheetsu.com/apis/c3684899
https://docs.google.com/spreadsheets/d/1_sLyWSV38lVrueCIZPjBxy5rLbcrQcX8tyynuS-8cYk/edit#gid=0

user_post_pivot
https://docs.google.com/spreadsheets/d/103dockUL_dqF5U2QnLUNP5JF0c-2g7slcbBlE_8Ml_4/edit#gid=0
https://sheetsu.com/apis/5dab997f
*/