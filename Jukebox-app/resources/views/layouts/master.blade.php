<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jukebox</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
  <nav class="comp-navbar">
    <ul>
      <div>
        <a href="{{route('genre.index')}}" class="left-assign">Genre</a>
        <a href="{{route('song.index')}}" class="left-assign">Song</a>
        <a href="{{route('playlist.index')}}" class="left-assign">Playlist</a>
      </div>
      <div>
        @if (Route::has('login'))
          @auth
            <a href="{{ url('/dashboard') }}" class="right-assign">Dashboard</a>
          @else
            <a href="{{ route('login') }}" class="right-assign">Log in</a>
            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="right-assign">Register</a>
            @endif
          @endauth
        @endif
      </div>
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