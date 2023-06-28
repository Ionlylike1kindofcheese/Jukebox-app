@extends('layouts.master')

@section('mainContent')
  <h1>Edit Genre</h1>

  <form method="POST" action="{{ route('genre.update', $genre->id) }}">
    @csrf
    @method('PUT')
    <div>
      <label for="name">Genre Name:</label>
      <input type="text" id="name" name="name" value="{{ $genre->name }}" required>
      <button type="submit">Update</button>
    </div>
  </form>
@endsection