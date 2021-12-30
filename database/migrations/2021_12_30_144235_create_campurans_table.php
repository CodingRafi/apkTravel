<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campurans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('no_telp');
            $table->text('alamat');
            $table->string('jam_buka');
            $table->string('jam_tutup');
            $table->text('deskripsi');
            $table->text('foto/video');
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
        Schema::dropIfExists('campurans');
    }
}
