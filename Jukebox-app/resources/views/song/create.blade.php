@extends('layouts.master')

@section('mainContent')
  <h1>Add a Song</h1>
  <form method="POST" action="{{route('song.store')}}">
    @csrf
    <label>Song name</label>
    <input name="name" type="text" value="{{old('name')}}">
    @error('name')
      <span class="error-message">{{$message}}</span>
    @enderror
    <br>
    <label>Song author</label>
    <input name="author" type="text" value="{{old('author')}}">
    @error('author')
      <span class="error-message">{{$message}}</span>
    @enderror
    <br>
    <label>Album name</label>
    <input name="album" type="text" value="{{old('album')}}">
    @error('album')
      <span class="error-message">{{$message}}</span>
    @enderror
    <br>
    <label>Song release date</label>
    <input name="release" type="date" value="{{old('release')}}">
    @error('release')
      <span class="error-message">{{$message}}</span>
    @enderror
    <br>
    <label>Song duration (in seconds)</label>
    <input name="duration" type="number" value="{{old('duration')}}">
    @error('duration')
      <span class="error-message">{{$message}}</span>
    @enderror
    <br>
    <label>Song genre(s)</label>
    <div id="song-creation-genre-checkboxes">
    @foreach($genres as $genre)
      <div class="song-creation-genre-box">
        <input type="checkbox" name="genre_id[]" value="{{$genre->id}}" @if(in_array($genre->id, old('genre_id', []))) checked @endif>
        <label>{{$genre->name}}</label>
      </div>
    @endforeach
    </div>
    @error('genre_id')
      <span class="error-message">{{$message}}</span>
    @enderror
    <br>
    <input type="submit" value="Send me!">
  </form>
  <a href="{{route('song.index')}}">Return to overview</a>
@endsection