@extends('layout')

@section('content')

  <div class="page-wrapper">
    <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>
    <form action="/articles" method="post">
      @csrf

      <div class="field">
        <label class="label" for="title">Title</label>
        <p class="control">
        <input name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" placeholder="Text input" value="{{ old('title') }}">
          @if($errors->has('title'))
            <div class="help is-danger">{{ $errors->first('title') }}</div>
          @endif
        </p>
      </div>

      <div class="field">
        <label class="label" for="excerpt">Excerpt</label>
        <p class="control">
          <textarea name="excerpt" class="textarea {{ $errors->has('excerpt') ? 'is-danger' : '' }}" placeholder="Textarea">{{ old('excerpt') }}</textarea>
          @if($errors->has('excerpt'))
            <div class="help is-danger">{{ $errors->first('excerpt') }}</div>
          @endif

        </p>
      </div>

      <div class="field">
        <label class="label" for="body">Body</label>
        <p class="control">
          <textarea name="body" class="textarea {{ $errors->has('body') ? 'is-danger' : '' }}" placeholder="Textarea">{{ old('body') }}</textarea>
          @if($errors->has('body'))
            <div class="help is-danger">{{ $errors->first('body') }}</div>
          @endif

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
