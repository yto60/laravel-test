<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Articles</title>
</head>
<body>
<ul>
  @foreach ($articles as $article)
  <li>
  <h3>
  <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
  </h3>
  <p>{{ $article->excerpt }}</p>
  </li>
  @endforeach
</ul>
</body>
</html>
