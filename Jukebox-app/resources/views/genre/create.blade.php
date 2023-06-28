@extends('layouts.master')

@section('mainContent')
  <form method="POST" action="{{route('genre.store')}}">
    @csrf
    <label>Genre name:</label>
    <input name="genreName" type="text"></input>
    <input type="submit" value="Submit"></input>
  </form>
@endsection