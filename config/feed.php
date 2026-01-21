<?php

use App\Models\Post;

return [
    'feeds' => [
        'main_atom' => [
            'items' => [Post::class, 'getFeedItems'],
            'url' => '/feed/atom',
            'title' => 'I Can Build Your Website',
            'description' => 'All articles',
            'language' => 'en-US',
            'format' => 'atom',
            'view' => 'feed::atom',
        ],
        'main_rss' => [
            'items' => [Post::class, 'getFeedItems'],
            'url' => '/feed/rss',
            'title' => 'I Can Build Your Website',
            'description' => 'All articles',
            'language' => 'en-US',
            'format' => 'rss',
            'view' => 'feed::rss',
        ],
        'main_json' => [
            'items' => [Post::class, 'getFeedItems'],
            'url' => '/feed/json',
            'title' => 'I Can Build Your Website',
            'description' => 'All articles',
            'language' => 'en-US',
            'format' => 'json',
            'view' => 'feed::json',
        ],
    ],
];
