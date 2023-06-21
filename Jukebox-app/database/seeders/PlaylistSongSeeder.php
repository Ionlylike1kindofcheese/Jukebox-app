<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Playlist;
use App\Models\Song;

class PlaylistSongSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $playlistSongs = [
      ['playlist_id' => Playlist::where('name', 'Hit Single Real')->first()->id, 'song_id' => Song::where('name', 'Joyous')->first()->id],
      ['playlist_id' => Playlist::where('name', 'Hit Single Real')->first()->id, 'song_id' => Song::where('name', 'Bold Or Brash (Darnell Wet Fart)')->first()->id],
      ['playlist_id' => Playlist::where('name', 'Project MSG Rebirth')->first()->id, 'song_id' => Song::where('name', 'Judgement')->first()->id],
      ['playlist_id' => Playlist::where('name', 'Project MSG Rebirth')->first()->id, 'song_id' => Song::where('name', '25M')->first()->id],
      ['playlist_id' => Playlist::where('name', 'Project MSG Rebirth')->first()->id, 'song_id' => Song::where('name', 'Chompin\' Beats')->first()->id],
      ['playlist_id' => Playlist::where('name', 'Project MSG Rebirth')->first()->id, 'song_id' => Song::where('name', 'Can\'t Beat Quickman')->first()->id],
      ['playlist_id' => Playlist::where('name', 'Project MSG Rebirth')->first()->id, 'song_id' => Song::where('name', 'Blood Of Dracula')->first()->id],
      ['playlist_id' => Playlist::where('name', 'Project MSG Rebirth')->first()->id, 'song_id' => Song::where('name', 'Overworld')->first()->id],
      ['playlist_id' => Playlist::where('name', 'FNF Songs')->first()->id, 'song_id' => Song::where('name', 'Joyous')->first()->id],
      ['playlist_id' => Playlist::where('name', 'FNF Songs')->first()->id, 'song_id' => Song::where('name', 'Bold Or Brash (Darnell Wet Fart)')->first()->id],
      ['playlist_id' => Playlist::where('name', 'FNF Songs')->first()->id, 'song_id' => Song::where('name', 'Judgement')->first()->id],
      ['playlist_id' => Playlist::where('name', 'FNF Songs')->first()->id, 'song_id' => Song::where('name', '25M')->first()->id],
      ['playlist_id' => Playlist::where('name', 'FNF Songs')->first()->id, 'song_id' => Song::where('name', 'Chompin\' Beats')->first()->id],
      ['playlist_id' => Playlist::where('name', 'FNF Songs')->first()->id, 'song_id' => Song::where('name', 'Can\'t Beat Quickman')->first()->id],
      ['playlist_id' => Playlist::where('name', 'FNF Songs')->first()->id, 'song_id' => Song::where('name', 'Blood Of Dracula')->first()->id],
      ['playlist_id' => Playlist::where('name', 'FNF Songs')->first()->id, 'song_id' => Song::where('name', 'Overworld')->first()->id],
      ['playlist_id' => Playlist::where('name', 'Normal Songs')->first()->id, 'song_id' => Song::where('name', 'Lose Control')->first()->id],
      ['playlist_id' => Playlist::where('name', 'Normal Songs')->first()->id, 'song_id' => Song::where('name', 'Honest')->first()->id],
    ];

    DB::table('playlist_song')->insert($playlistSongs);
  }
}
