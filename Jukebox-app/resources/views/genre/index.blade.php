@extends('layouts.master')

@section('mainContent')
  <h1>Totaloverview Genres</h1>
  <ul>
  @foreach($genres as $genre)
    <li>
      {{$genre->name}} 
      @if(auth()->user()?->email == "admin@gmail.com")        
        <a href="{{route('genre.edit', ['genre' => $genre->id])}}">Edit</a> 
      @endif
    </li>
  @endforeach
  </ul>
  @if(auth()->user()?->email == "admin@gmail.com")  
    <a href="{{route('genre.create')}}">Add new Genre</a>
  @endif
@endsection