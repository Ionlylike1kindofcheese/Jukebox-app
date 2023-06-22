<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // individual seeders
    $this->call(GenreSeeder::class);
    $this->call(SongSeeder::class);
    $this->call(PlaylistSeeder::class);
    // many-to-many relational table seeders
    $this->call(PlaylistSongSeeder::class);
    $this->call(GenreSongSeeder::class);
    // \App\Models\User::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
