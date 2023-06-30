@extends('layouts.master')

@section('mainContent')
  <h1>{{$playlist->name}}</h1>
  <p><span class="song-removed">Grey-marked</span> songs are unavailable!!!</p>
  <ul>
  @php
    $totalDuration = 0;
  @endphp
  @foreach($songs as $song)
      @if(isset($song->album))
        <li>
          @php
            $totalDuration += $song->duration;
          @endphp
          {{$song->name}}
          <a href="{{ route('playlist.detach', ['playlist' => $playlist->id, 'song' => $song->id]) }}">X</a>
        </li>
      @else
        <li class="song-removed">
          {{$song->name}}
          <a href="{{ route('playlist.detach', ['playlist' => $playlist->id, 'song' => $song->song_id]) }}">X</a>
        </li>
      @endif
  @endforeach
  </ul>
  <p>Total duration: {{ gmdate('H:i:s', $totalDuration) }}</p>
  <a href="{{route('playlist.add', ['playlist' => $playlist->id])}}">Add songs to playlist</a> <br>
  <a href="{{route('playlist.index')}}">Return to overview</a>
@endsection