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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();

            // movie title, original language and release year are not unique because there can be multiple movies with
            $table->string("movie_code")->index();
            $table->string("name")->index();
            $table->string("release_date")->index();
            $table->string("genre")->index();
            $table->enum('popular',['popular','new_release'])->index();
            $table->string('description');
            $table->integer('duration');
            $table->float('rating');
            $table->string('thumbnail');
            $table->string('video');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
