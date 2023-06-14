<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Dit is een totaaloverzicht van alle genres</h1>
  <ul>
  @foreach($genres as $genre)
    <li><a href="{{route('genre.destroy', ['genre' => $genre->id])}}">X</a> {{$genre->name}}</li>
  @endforeach
  </ul>
  <a href="{{route('genre.create')}}">Genre Toevoegen</a>
</body>
</html>