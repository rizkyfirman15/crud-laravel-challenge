<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pertanyaan_id')->unsigned();
            $table->string('isi');
            $table->date('tgl_dibuat')->nullable();
            $table->date('tgl_diperbaharui')->nullable();
            $table->timestamps();
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan')->onDelete('cascade')->onUpdate('cascade');
        });

        // Schema::table('jawabans', function (Blueprint $table) {
        //     $table->foreign('pertanyaan_id')->references('id')->on('pertanyaans')->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
