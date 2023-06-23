@extends('layouts.master')

@section('mainContent')
  <h1>Dit is een totaaloverzicht van alle genres</h1>
  <ul>
  @foreach($genres as $genre)
    <li><a href="{{route('genre.destroy', ['genre' => $genre->id])}}">X</a> {{$genre->name}}</li>
  @endforeach
  </ul>
  <a href="{{route('genre.create')}}">Genre Toevoegen</a>
@endsection