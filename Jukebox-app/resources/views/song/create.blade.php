@extends('layouts.master')

@section('mainContent')
  <form method="POST" action="{{route('song.store')}}">
    @csrf
    <label>Vul een naam in voor een song</label>
    <input name="songName" type="text"></input>
    <input type="submit" value="Bevestig"></input>
  </form>
@endsection