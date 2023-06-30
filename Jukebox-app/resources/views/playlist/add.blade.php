@extends('layouts.master')

@section('mainContent')
  <h1>Add Songs to {{$playlist->name}}</h1>
  <form method="POST" action="{{route('playlist.insert', ['playlist' => $playlist->id])}}">
    @csrf
    <label>Available Songs</label>
    <div id="playlist-addition-song-checkboxes">
    @foreach($songs as $song)
      <div class="playlist-addition-song-box">
        <input type="checkbox" name="song_id[]" value="{{$song->id}}" @if(in_array($song->id, old('song_id', []))) checked @endif>
        <label>{{$song->name}}</label>
      </div>
    @endforeach
    </div>
    @error('song_id')
      <span class="error-message">{{$message}}</span>
    @enderror
    <br>
    <input type="submit" value="Submit">
  </form>
  <a href="{{route('playlist.view', ['playlist' => $playlist])}}">Return to overview</a>
@endsection