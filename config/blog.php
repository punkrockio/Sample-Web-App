<?php
return [
    'name' => "Rock.ai",
    'title' => "Rock.ai",
    'subtitle' => 'So fresh. So clean.',
    'description' => 'This is my meta description',
    'author' => 'Nick Mitchell',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'contact_email' => env('MAIL_FROM'),
    'uploads' => [
        'storage' => 'local',
        'webpath' => '/uploads/',
    ],
];

