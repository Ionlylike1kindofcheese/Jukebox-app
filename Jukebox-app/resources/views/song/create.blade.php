@extends('layouts.master')

@section('mainContent')
  <h1>Add a Song</h1>
  <form method="POST" action="{{route('song.store')}}">
    @csrf
    <label>Song name</label>
    <input name="name" type="text">
    <br>
    <label>Song author</label>
    <input name="author" type="text">
    <br>
    <label>Album name</label>
    <input name="album" type="text">
    <br>
    <label>Song release date</label>
    <input name="release" type="date">
    <br>
    <label>Song duration (in seconds)</label>
    <input name="duration" type="number">
    <br>
    <label>Song genre(s)</label>
    <div id="song-creation-genre-checkboxes">
    @foreach($genres as $genre)
      <div class="song-creation-genre-box">
        <input type="checkbox" name="genre_id[]" value="{{$genre->id}}">
        <label>{{$genre->name}}</label>
      </div>
    @endforeach
    </div>
    <br>
    <input type="submit" value="Send me!">
  </form>
@endsection