<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jukebox</title>
</head>
<body>
  <nav>
    <ul>
      <a href="{{route('genre.index')}}">Genre</a>
      <a href="{{route('song.index')}}">Song</a>
      <a href="{{route('playlist.index')}}">Playlist</a>
    </ul>
  </nav>
  <main>
    @yield('mainContent')
  </main>
  <footer>
    <p>&copy; Jukebox 2023 Robin Vervoorn. All rights reserved.</p>
  </footer> 
</body>
</html>