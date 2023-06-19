<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Playlist;

class PlaylistSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $playlists = [
      ['name' => 'playlist1'],
      ['name' => 'playlist2'],
      ['name' => 'playlist3'],
    ];
    Genre::insert($playlists);
  }
}