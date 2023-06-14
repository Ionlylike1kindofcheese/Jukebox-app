<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="POST" action="{{route('playlist.store')}}">
    @csrf
    <label>Vul een naam in voor een playlist</label>
    <input name="playlistName" type="text"></input>
    <input type="submit" value="Bevestig"></input>
  </form>
</body>
</html>