@extends('layouts.master')

@section('mainContent')
  <h1>Edit Genre</h1>

  <form method="POST" action="{{ route('genre.update', $genre->id) }}">
    @csrf
    @method('PUT')
    <div>
      <label for="name">Genre Name:</label>
      <input type="text" id="name" name="name" value="{{ $genre->name }}">
      <input type="submit" value="Update"></input>
      @error('name')
        <span class="error-message">{{$message}}</span>
      @enderror
    </div>
  </form>
  <a href="{{route('genre.index')}}">Return to overview</a>
@endsection