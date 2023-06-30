@extends('layouts.master')

@section('mainContent')
  <h1>Totaloverview Genres</h1>
  <p>Selecting a genre will filter songs totaloverview</p>
  <ul>
  @foreach($genres as $genre)
    <li>
      <a href="{{route('song.index', ['genre' => $genre->id])}}">{{$genre->name}}</a> 
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