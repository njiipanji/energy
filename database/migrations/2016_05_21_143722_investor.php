<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Investor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor', function (Blueprint $table) {
            $table->string('id_investor', '8');
            $table->primary('id_investor');
            $table->string('nama_investor', '64');
            $table->string('no_ktp_investor', '32');
            $table->string('email_investor', '64');
            $table->string('no_telp_investor', '16');
            $table->string('password_investor', '256');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('investor');
    }
}
