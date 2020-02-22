<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        // dd($post); // debug

        // when using first()
        // if (!$post) {
        //     abort(404);
        // }

        return view('post', [
            'post' => $post,
        ]);
    }
}
