@extends('layouts.master')

@section('mainContent')
  <form method="POST" action="{{route('genre.store')}}">
    @csrf
    <label>Vul een naam in voor een genre</label>
    <input name="genreName" type="text"></input>
    <input type="submit" value="Bevestig"></input>
  </form>
@endsection