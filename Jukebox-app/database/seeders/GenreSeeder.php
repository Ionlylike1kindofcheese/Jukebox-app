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
      ['name' => 'Opera'],
      ['name' => 'Dubstep'],
      ['name' => 'Afrobeat'],
      ['name' => 'Salsa'],
      ['name' => 'Gospel'],
      ['name' => 'Indie'],
      ['name' => 'Dance'],
      ['name' => 'Blues'],
      ['name' => 'Soul'],
      ['name' => 'Funk'],
      ['name' => 'Phonk'],
      ['name' => 'Punk'],
      ['name' => 'Classical'],
      ['name' => 'Alternative'],
      ['name' => 'R&B'],
      ['name' => 'Folk'],
      ['name' => 'Jazz'],
      ['name' => 'Country'],
      ['name' => 'Electronic'],
      ['name' => 'Hip-Hop'],
    ];
    Genre::insert($genres);
  }
}
