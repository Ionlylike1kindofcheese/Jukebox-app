@extends('layouts.master')

@section('mainContent')
  <form method="POST" action="{{route('playlist.store')}}">
    @csrf
    <label>Playlist name:</label>
    <input name="playlistName" type="text"></input>
    <input type="submit" value="Bevestig"></input>
  </form>
  <a href="{{route('playlist.index')}}">Return to overview</a>
@endsection