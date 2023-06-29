@extends('layouts.master')

@section('mainContent')
  <h1>{{$song->name}}</h1>

  <p>Song name: {{$song->name}}</p>
  <p>Song author: {{$song->author}}</p>
  <p>Song album: {{$song->album}}</p>
  <p>Song release: {{$song->release}}</p>
  <p>Song duration: {{ gmdate('i:s', $song->duration) }}</p>
  <p>Song contributor: {{ App\Models\User::where('email', $song->contributor)->value('name') }}</p>
  <a href="{{route('song.index')}}">Return to overview</a>
@endsection