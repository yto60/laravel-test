<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/test/string', function () {
    return 'Hello, World!';
});
Route::get('/test/json', function () {
    return ['foo' => 'bar', 'po' => 'poyo'];
});

Route::get('/', function () {
    $name = request('name');
    return view('test', [
        'name' => $name,
    ]);
});

// Route::get('/posts/{key}', function ($key) {
//     // 連想配列
//     $posts = [
//         'my-first-post' => 'hogehoge',
//         'my-second-post' => 'poyopoyo',
//     ];

//     if (!array_key_exists($key, $posts)) {
//         abort(404, 'Sorry, that page was not found.');
//     }

//     return view('post', [
//         'post' => $posts[$key],
//     ]);
// });
Route::get('/items/{id}', function ($id) {
    // 配列
    $items = ['apple', 'orange', 'banana'];
    if (!array_key_exists($id, $items)) {
        abort(404, 'Sorry, that page was not found.');
    }
    return $items[$id];
});

Route::get('/posts/{key}', 'PostsController@show');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/articles', function () {
    $articles = App\Article::latest()->take(2)->get();
    // $articles = App\Article::paginate(2);

    return view('articles', [
        'articles' => $articles,
    ]);
});

Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/edit/{id}', 'ArticlesController@edit');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::put('/articles/{id}', 'ArticlesController@update');
Route::post('/articles', 'ArticlesController@store');
