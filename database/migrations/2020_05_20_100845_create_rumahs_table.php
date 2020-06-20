<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('rumahs', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('kategori_id');
        $table->string('rumah_nama')->nullable();
        $table->string('rumah_lantai')->nullable();
        $table->string('rumah_kt')->nullable();
        $table->string('rumah_km')->nullable();
        $table->string('rumah_luas')->nullable();
        $table->string('rumah_jumlahblock')->nullable();
        $table->string('rumah_harga')->nullable();
        $table->text('rumah_lokasi')->nullable();
        $table->text('rumah_deskripsi')->nullable();
        $table->string('rumah_fasilitas')->nullable();
        $table->string('rumah_status')->nullable();
        $table->text('rumah_maps')->nullable();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
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
      Schema::dropIfExists('rumahs');
    }
}
