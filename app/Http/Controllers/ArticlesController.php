<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{
    // render a list of resource
    public function index()
    {
        $articles = Article::latest()->get();

        return $articles;
    }

    // show a single resource
    public function show(Article $article)
    {
        // Leverage Route Model Binding
        return view('articles.show', [
            'article' => $article,
        ]);
    }

    // shows a view to create a new resource
    public function create()
    {
        return view('articles.create');
    }

    // persist the new resource
    public function store()
    {
        $validatedAttributes = $this->validateArticle();
        Article::create($validatedAttributes);

        return redirect('/articles');
    }

    // shows a view to edit an existing resource
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        // return view('articles.edit', [
        //     'article' => $article,
        // ]);
        return view('articles.edit', compact('article')); // 上と等価
    }

    // persist the edited resource
    public function update($id)
    {
        $validatedAttributes = $this->validateArticle();

        $article = Article::findOrFail($id);

        $article->update($validatedAttributes);

        return redirect('/articles/' . $id);
    }

    // delete the resource
    public function destroy()
    {

    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => ['required', 'max:255'],
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}
