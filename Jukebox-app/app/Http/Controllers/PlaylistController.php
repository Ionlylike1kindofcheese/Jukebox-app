<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $currentUser = auth()->user();
      $playlists = Playlist::where('contributor', $currentUser->email)->get();
      return view('playlist.index', ['playlists' => $playlists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('playlist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      Playlist::create([
        "name" => $request['playlistName'],
        "contributor" => auth()->user()->email,
      ]);
      return redirect(route('playlist.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Playlist $playlist)
    {
      $ascos = DB::table('playlist_song')->where('playlist_id', $playlist->id)->get();
      $songs = [];
      foreach ($ascos as $asco) {
          $song = Song::find($asco->song_id);
          if ($song) {
              $songs[] = $song;
          }
      }
      return view('playlist.view', ['playlist' => $playlist, 'songs' => $songs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playlist $playlist)
    {
      return view('playlist.edit', compact('playlist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Playlist $playlist)
    {
      $playlist->name = $request->input('name');
      $playlist->save();
      return redirect(route('playlist.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Playlist $playlist)
    {    
      Playlist::destroy($playlist->id);
      return redirect(route('playlist.index'));
    }
}
