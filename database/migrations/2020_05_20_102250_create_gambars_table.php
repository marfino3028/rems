<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('gambars', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('rumah_id');
        $table->string('gambar_name')->nullable();
        $table->string('normal_path')->nullable();
        $table->string('thumbnail_path')->nullable();
        $table->foreign('rumah_id')->references('id')->on('rumahs')->onDelete('cascade');
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
        Schema::dropIfExists('gambars');
    }
}
