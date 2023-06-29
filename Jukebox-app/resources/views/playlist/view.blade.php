@extends('layouts.master')

@section('mainContent')
  <h1>{{$playlist->name}}</h1>
  <ul>
  @foreach($songs as $song)
    <li>
      {{$song->name}}
    </li>
  @endforeach
  </ul>
  <a href="{{route('playlist.index')}}">Return to overview</a>
@endsection