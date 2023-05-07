<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();



            $table->string('name');
            $table->string('slug');
            $table->longText('story')->nullable();
            $table->string('poster')->nullable();

            $table->tinyInteger('trending')->nullable();

            $table->tinyInteger('action')->nullable();
            $table->tinyInteger('fantasy')->nullable();
            $table->tinyInteger('comedy')->nullable();
            $table->tinyInteger('romance')->nullable();
            $table->tinyInteger('drama')->nullable();
            $table->tinyInteger('mystery')->nullable();
            $table->tinyInteger('adventure')->nullable();



            $table->tinyInteger('hd')->nullable();
            $table->tinyInteger('fhd')->nullable();
            $table->tinyInteger('dvd')->nullable();
            $table->tinyInteger('s')->nullable();
            $table->tinyInteger('e')->nullable();
            $table->tinyInteger('t')->nullable();


            $table->string('imdb')->nullable();

            $table->string('release_year')->nullable();
            $table->string('country')->nullable();

            $table->mediumText('meta_keywords')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }
};
