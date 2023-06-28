<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $genres = [
      ['name' => 'Rap', 'contributor' => 'admin@gmail.com'],
      ['name' => 'Lyrics', 'contributor' => 'admin@gmail.com'],
      ['name' => 'Explicit', 'contributor' => 'admin@gmail.com'],
      ['name' => 'Single', 'contributor' => 'admin@gmail.com'],
      ['name' => 'Pop', 'contributor' => 'admin@gmail.com'],
      ['name' => 'Rock', 'contributor' => 'admin@gmail.com'],
      ['name' => 'Metal', 'contributor' => 'admin@gmail.com'],
      ['name' => 'Horror', 'contributor' => 'admin@gmail.com'],
      ['name' => 'Chiptune', 'contributor' => 'admin@gmail.com'],
    ];
    Genre::insert($genres);
  }
}
