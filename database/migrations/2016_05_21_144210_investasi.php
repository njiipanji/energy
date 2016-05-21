<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Investasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investasi', function (Blueprint $table) {
            $table->string('id_investasi', '16');
            $table->primary('id_investasi');
            $table->string('id_investor', '8');
            $table->timestamp('tgl_investasi')->nullable();
            $table->integer('jumlah_donasi');

            $table->foreign('id_investor')->references('id_investor')->on('investor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('investasi');
    }
}
