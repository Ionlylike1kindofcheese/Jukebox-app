<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Dit is een totaaloverzicht van alle songs</h1>
  <ul>
  @foreach($songs as $song)
    <li><a href="{{route('song.destroy', ['song' => $song->id])}}">X</a> {{$song->name}}</li>
  @endforeach
  </ul>
  <a href="{{route('song.create')}}">Song Toevoegen</a>
</body>
</html>