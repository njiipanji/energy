<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Donatur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donatur', function (Blueprint $table) {
            $table->string('id_donatur', '8');
            $table->primary('id_donatur');
            $table->string('nama_donatur', '64');
            $table->string('no_ktp_donatur', '32');
            $table->string('email_donatur', '64');
            $table->string('no_telp_donatur', '16');
            $table->string('password_donatur', '256');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('donatur');
    }
}
