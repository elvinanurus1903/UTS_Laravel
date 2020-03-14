<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('films', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('kode');
            $table->string('judul');
            $table->string('pemain');
            $table->string('sinopsis');
            $table->string('tahun');
            $table->bigInteger('genre');
            $table->string('image');
            $table->timestamps();
        });

    Schema::table('films', function($table) {
            $table->foreign('genre')->references('id_genre')->on('genre')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
