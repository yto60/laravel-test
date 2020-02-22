<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    public function show($slug)
    {
        $post = \DB::table('posts')->where('slug', $slug)->first();

        // dd($post); // debug

        // if (!array_key_exists($slug, $posts)) {
        //     abort(404, 'Sorry, that page was not found.');
        // }

        return view('post', [
            'post' => $post,
        ]);
    }
}
