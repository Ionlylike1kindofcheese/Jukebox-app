<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Playlist;

class Song extends Model
{
  protected $fillable = ["name"];
  use HasFactory;

  public function playlists() {
    return $this->belongsToMany(Playlist::class);
  }
}
