<?php


namespace App\Http\Controllers;


class PostController
{
    private $posts = [
        1 => [
            'id' => 1,
            'title' => 'Bitcoin is 58000$',
            'description' => 'Many text about bitcoin',
            'imgUrl' => '#'
        ],
        2 => [
            'id' => 2,
            'title' => '2 Bitcoin is 58000$',
            'description' => 'Many text about bitcoin',
            'imgUrl' => '#'
        ],
        3 => [
            'id' => 3,
            'title' => '3 Bitcoin is 58000$',
            'description' => 'Many text about bitcoin',
            'imgUrl' => '#'
        ],
        4 => [
            'id' => 4,
            'title' => '4 Bitcoin is 58000$',
            'description' => 'Many text about bitcoin',
            'imgUrl' => '#'
        ]
    ];
    public function posts()
    {
        return view('posts.list', [
            'posts' => $this->posts
        ]);
    }
}
