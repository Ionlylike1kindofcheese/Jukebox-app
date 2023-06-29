@extends('layouts.master')

@section('mainContent')
  <form method="POST" action="{{route('genre.store')}}">
    @csrf
    <label>Genre name:</label>
    <input name="name" type="text" value="{{old('name')}}"></input>
    <input type="submit" value="Submit"></input>
    @error('name')
      <span class="error-message">{{$message}}</span>
    @enderror
  </form>
  <a href="{{route('genre.index')}}">Return to overview</a>
@endsection