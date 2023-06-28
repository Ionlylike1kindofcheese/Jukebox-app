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
      ['name' => 'Hit Single Real', 'contributor' => 'admin@gmail.com'],
      ['name' => 'Project MSG Rebirth', 'contributor' => 'admin@gmail.com'],
      ['name' => 'FNF Songs', 'contributor' => 'admin@gmail.com'],
      ['name' => 'Normal Songs', 'contributor' => 'admin@gmail.com'],
    ];
    Playlist::insert($playlists);
  }
}