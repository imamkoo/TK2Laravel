<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('NIM');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('quis')->nullable();
            $table->string('tugas')->nullable();
            $table->string('absensi')->nullable();
            $table->string('praktek')->nullable();
            $table->string('UAS')->nullable();
            $table->string('GPA')->nullable();
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
        Schema::dropIfExists('mahasiswa');
    }
}