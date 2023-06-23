@extends('layouts.master')

@section('mainContent')
  <h1>Dit is een totaaloverzicht van alle songs</h1>
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