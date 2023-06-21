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
      ['name' => 'Hit Single Real'],
      ['name' => 'Project MSG Rebirth'],
      ['name' => 'FNF Songs'],
      ['name' => 'Normal Songs'],
    ];
    Playlist::insert($playlists);
  }
}