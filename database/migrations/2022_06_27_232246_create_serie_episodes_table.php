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
        Schema::create('serie_episodes', function (Blueprint $table) {
            $table->id();
            $table->string('season_id');
            $table->string('number');
            $table->string('server_link_mega')->nullable();
            $table->string('server_link_drive')->nullable();
            $table->string('server_link_ok')->nullable();
            $table->string('server_link_mp4upload')->nullable();
            $table->string('server_link_4shared')->nullable();
            $table->string('server_link_uptobox')->nullable();
            $table->string('server_link_vidshare')->nullable();

            $table->string('down_link_mega')->nullable();
            $table->string('down_link_drive')->nullable();
            $table->string('down_link_ok')->nullable();
            $table->string('down_link_mp4upload')->nullable();
            $table->string('down_link_4shared')->nullable();
            $table->string('down_link_uptobox')->nullable();
            $table->string('down_link_vidshare')->nullable();
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
        Schema::dropIfExists('serie_episodes');
    }
};
