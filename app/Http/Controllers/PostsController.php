<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    public function show($key)
    {
        $posts = [
            'my-first-post' => 'hogehoge',
            'my-second-post' => 'poyopoyo',
        ];

        if (!array_key_exists($key, $posts)) {
            abort(404, 'Sorry, that page was not found.');
        }

        return view('post', [
            'post' => $posts[$key],
        ]);
    }
}
