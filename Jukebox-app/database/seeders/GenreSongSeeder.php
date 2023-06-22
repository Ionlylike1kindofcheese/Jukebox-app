<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;
use App\Models\Genre;

class GenreSongSeeder extends Seeder
{
  public function run()
  {
    // Define the associations between genres and songs
    $genreSongAssociations = [
      ['song' => 'Joyous', 'genres' => ['Rap', 'Lyrics', 'Explicit', 'Horror']],
      ['song' => 'Bold Or Brash (Darnell Wet Fart)', 'genres' => ['Rap', 'Lyrics', 'Explicit', 'Horror']],
      ['song' => 'Judgement', 'genres' => ['Rap', 'Chiptune']],
      ['song' => '25M', 'genres' => ['Rap', 'Chiptune']],
      ['song' => 'Chompin\' Beats', 'genres' => ['Rap', 'Chiptune']],
      ['song' => 'Can\'t Beat Quickman', 'genres' => ['Rap', 'Chiptune']],
      ['song' => 'Blood Of Dracula', 'genres' => ['Rap', 'Chiptune']],
      ['song' => 'Overworld', 'genres' => ['Rap', 'Chiptune']],
      ['song' => 'Lose Control', 'genres' => ['Lyrics', 'Pop', 'Rock']],
      ['song' => 'Honest', 'genres' => ['Lyrics', 'Rock', 'Metal']],
    ];

    // Loop through each association and attach the genres to the corresponding songs
    foreach ($genreSongAssociations as $association) {
      $song = Song::where('name', $association['song'])->first();
      if ($song) {
        $genres = Genre::whereIn('name', $association['genres'])->get();
        foreach ($genres as $genre) {
          $song->genres()->attach($genre->id);
        }
      }
    }
  }
}