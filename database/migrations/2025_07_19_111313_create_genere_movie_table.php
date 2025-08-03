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
        Schema::create('Genre_movie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Genre_id');
            $table->foreign('Genre_id')->references('id')->on('Genres');
            $table->renameColumn('genere_id', 'genre_id');


            $table->unsignedBigInteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Genre_movie');
        $table->renameColumn('genre_id', 'genere_id');
    }
};
