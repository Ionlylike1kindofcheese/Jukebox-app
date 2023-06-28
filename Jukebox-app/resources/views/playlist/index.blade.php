@extends('layouts.master')

@section('mainContent')
  <h1>Dit is een totaaloverzicht van alle playlists</h1>
  <ul>
  @foreach($playlists as $playlist)  
    <li>
      @if(auth()->user())
        @if(auth()->user()->email == "admin@gmail.com")
          <a href="{{route('playlist.destroy', ['playlist' => $playlist->id])}}">X</a>
        @endif 
      @endif
      {{$playlist->name}}
    </li>
  @endforeach
  </ul>
  @if(auth()->user())
    <a href="{{route('playlist.create')}}">Playlist toevoegen</a>
  @endif
@endsection