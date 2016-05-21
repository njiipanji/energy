<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Donasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasi', function (Blueprint $table) {
            $table->string('id_donasi', '16');
            $table->primary('id_donasi');
            $table->string('id_donatur', '8');
            $table->timestamp('tgl_donasi')->nullable();
            $table->integer('jumlah_donasi');

            $table->foreign('id_donatur')->references('id_donatur')->on('donatur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('donasi');
    }
}
