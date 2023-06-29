@extends('layouts.master')

@section('mainContent')
  <h1>Dit is een totaaloverzicht van alle playlists</h1>
  <ul>
  @foreach($playlists as $playlist)  
    <li>
      @if(auth()->user())
        <a href="{{route('playlist.destroy', ['playlist' => $playlist->id])}}">X</a>
      @endif 
      {{$playlist->name}}
      <a href="{{route('playlist.view', ['playlist' => $playlist->id])}}">View </a>
      <a href="{{route('playlist.edit', ['playlist' => $playlist->id])}}">Edit </a>
    </li>
  @endforeach
  </ul>
  @if(auth()->user())
    <a href="{{route('playlist.create')}}">Playlist toevoegen</a>
  @endif
@endsection