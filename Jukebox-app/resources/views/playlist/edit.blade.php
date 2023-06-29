@extends('layouts.master')

@section('mainContent')
  <h1>Edit Playlist</h1>

  <form method="POST" action="{{ route('playlist.update', $playlist->id) }}">
    @csrf
    @method('PUT')
    <div>
      <label for="name">Playlist Name:</label>
      <input type="text" id="name" name="name" value="{{ $playlist->name }}" required>
      <button type="submit">Update</button>
    </div>
  </form>
@endsection