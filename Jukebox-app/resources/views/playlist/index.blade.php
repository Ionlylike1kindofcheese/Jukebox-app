<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Dit is een totaaloverzicht van alle playlists</h1>
  <ul>
  @foreach($playlists as $playlist)
    <li><a href="{{route('playlist.destroy', ['playlist' => $playlist->id])}}">X</a> {{$playlist->name}}</li>
  @endforeach
  </ul>
  <a href="{{route('playlist.create')}}">Playlist toevoegen</a>
</body>
</html>