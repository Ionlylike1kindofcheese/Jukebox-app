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
      ['name' => 'Rap'],
      ['name' => 'Lyrics'],
      ['name' => 'Explicit'],
      ['name' => 'Single'],
      ['name' => 'Pop'],
      ['name' => 'Rock'],
      ['name' => 'Metal'],
      ['name' => 'Horror'],
      ['name' => 'Chiptune'],
    ];
    Genre::insert($genres);
  }
}
