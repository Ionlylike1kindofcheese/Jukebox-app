<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;
use Carbon\Carbon;

class SongSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $songs = [
      ['name' => 'Joyous', 'author' => 'churgney gurgney', 'album' => 'Hit Single Real', 'release' => Carbon::createFromFormat('d-m-Y', '03-06-2023'), 'duration' => 306],
      ['name' => 'Bold Or Brash (Darnell Wet Fart)', 'author' => 'churgney gurgney', 'album' => 'Hit Single Real', 'release' => Carbon::createFromFormat('d-m-Y', '03-06-2023'), 'duration' => 231],

      ['name' => 'Judgement', 'author' => 'ZAPZONZAL', 'album' => 'Project MSG Rebirth', 'release' => Carbon::createFromFormat('d-m-Y', '13-03-2023'), 'duration' => 183],
      ['name' => '25M', 'author' => 'ZAPZONZAL', 'album' => 'Project MSG Rebirth', 'release' => Carbon::createFromFormat('d-m-Y', '13-03-2023'), 'duration' => 225],
      ['name' => 'Chompin\' Beats', 'author' => 'ZAPZONZAL', 'album' => 'Project MSG Rebirth', 'release' => Carbon::createFromFormat('d-m-Y', '13-03-2023'), 'duration' => 159],
      ['name' => 'Can\'t Beat Quickman', 'author' => 'ZAPZONZAL', 'album' => 'Project MSG Rebirth', 'release' => Carbon::createFromFormat('d-m-Y', '13-03-2023'), 'duration' => 222],
      ['name' => 'Blood Of Dracula', 'author' => 'ZAPZONZAL', 'album' => 'Project MSG Rebirth', 'release' => Carbon::createFromFormat('d-m-Y', '13-03-2023'), 'duration' => 273],
      ['name' => 'Overworld', 'author' => 'ZAPZONZAL', 'album' => 'Project MSG Rebirth', 'release' => Carbon::createFromFormat('d-m-Y', '13-03-2023'), 'duration' => 127],

      ['name' => 'Lose Control', 'author' => 'Hedley', 'album' => 'Hello', 'release' => Carbon::createFromFormat('d-m-Y', '17-06-2016'), 'duration' => 227],
      ['name' => 'Honest', 'author' => 'Thousand Foot Krutch', 'album' => 'Exhale', 'release' => Carbon::createFromFormat('d-m-Y', '06-11-2015'), 'duration' => 251],
    ];
    Song::insert($songs);
  }
}