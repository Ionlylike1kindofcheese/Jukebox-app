@extends('layouts.master')

@section('mainContent')
  <h1>{{$playlist->name}}</h1>
  <ul>
  @php
    $totalDuration = 0;
  @endphp
  @foreach($songs as $song)
    <li>
      {{$song->name}}
      @php
        $totalDuration += $song->duration;
      @endphp
    </li>
  @endforeach
  </ul>
  <p>Total duration: {{ gmdate('H:i:s', $totalDuration) }}</p>
  <a href="{{route('playlist.index')}}">Return to overview</a>
@endsection