<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('deleted_songs', function (Blueprint $table) {
      $table->id();
      $table->unsignedInteger('song_id');
      $table->string('name');
      $table->string('author');
      $table->date('release');
      $table->string('contributor');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('deleted_songs');
  }
};
