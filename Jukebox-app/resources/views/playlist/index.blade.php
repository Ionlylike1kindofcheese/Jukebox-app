@extends('layouts.master')

@section('mainContent')
  <h1>Dit is een totaaloverzicht van alle playlists</h1>
  <ul>
  @foreach($playlists as $playlist)
    <li><a href="{{route('playlist.destroy', ['playlist' => $playlist->id])}}">X</a> {{$playlist->name}}</li>
  @endforeach
  </ul>
  <a href="{{route('playlist.create')}}">Playlist toevoegen</a>
@endsection