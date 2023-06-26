@extends('layouts.master')

@section('mainContent')
  <h1>Dit is een totaaloverzicht van alle songs</h1>

  <form action="{{ route('song.index') }}" method="GET">
    <label for="genre">Filter by Genre:</label>
    <select name="genre" id="genre">
      <option value="">All Genres</option>
      @foreach($genres as $genre)
        <option value="{{ $genre->id }}" {{ request()->input('genre') == $genre->id ? 'selected' : '' }}>
          {{ $genre->name }}
        </option>
      @endforeach
    </select>
    <button type="submit">Filter</button>
  </form>

  <ul>
  @foreach($songs as $song)
    <li>
      <a href="{{route('song.destroy', ['song' => $song->id])}}">X</a>
      {{$song->name}} 
      @foreach($song->playlists as $playlist) 
        @if($playlist)
        / Playlist: {{$playlist->name}}
        @endif 
      @endforeach
    </li>
  @endforeach
  </ul>
  <a href="{{route('song.create')}}">Song Toevoegen</a>
@endsection