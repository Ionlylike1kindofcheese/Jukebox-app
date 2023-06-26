<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
use App\Models\Playlist;

class Song extends Model
{
  protected $fillable = ["name", "author", "album", "release", "duration", "genre_id"];
  use HasFactory;

  public function genres() {
    return $this->belongsToMany(Genre::class);
  }

  public function playlists() {
    return $this->belongsToMany(Playlist::class);
  }
}
