@extends('layout')

@section('content')

  <div class="page-wrapper">
    <h1 class="heading has-text-weight-bold is-size-4">Edit Article</h1>
  <form action="/articles/{{ $article->id }}" method="POST">
      @csrf

      @method('PUT')

      <div class="field">
        <label class="label" for="title">Title</label>
        <p class="control">
        <input name="title" class="input" type="text" placeholder="Text input" value="{{ $article->title }}">
        </p>
      </div>

      <div class="field">
        <label class="label" for="excerpt">Excerpt</label>
        <p class="control">
          <textarea name="excerpt" class="textarea" placeholder="Textarea">{{ $article->excerpt }}</textarea>
        </p>
      </div>

      <div class="field">
        <label class="label" for="body">Body</label>
        <p class="control">
          <textarea name="body" class="textarea" placeholder="Textarea">{{ $article->body }}</textarea>
        </p>
      </div>

      <div class="field is-grouped">
        <p class="control">
          <button class="button is-primary">Submit</button>
        </p>
      </div>
    </form>
  </div>
@endsection
