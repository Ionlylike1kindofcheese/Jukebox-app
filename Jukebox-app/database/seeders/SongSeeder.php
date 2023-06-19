<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $songs = [
      // Hit single real
      ['name' => 'Joyous'],
      ['name' => 'Darnell Wet Fart'],
      // Project MSG Rebirth
      ['name' => 'Judgement'],
      ['name' => '25M'],
      ['name' => 'Chompin\' Beats'],
      ['name' => 'Can\'t Beat Quickman'],
      ['name' => 'Blood Of Dracula'],
      ['name' => 'Overworld'],
    ];
    Song::insert($songs);
  }
}