@extends('layouts.master')

@section('mainContent')
  <form method="POST" action="{{route('playlist.store')}}">
    @csrf
    <label>Playlist name:</label>
    <input name="name" type="text" value="{{old('name')}}"></input>
    <input type="submit" value="Submit"></input>
    @error('name')
      <span class="error-message">{{$message}}</span>
    @enderror
  </form>
  <a href="{{route('playlist.index')}}">Return to overview</a>
@endsection