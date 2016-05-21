<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Volunteer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer', function (Blueprint $table) {
            $table->string('id_volunteer', '8');
            $table->primary('id_volunteer');
            $table->string('nama_volunteer', '64');
            $table->string('no_ktp_volunteer', '32');
            $table->string('email_volunteer', '64');
            $table->string('no_telp_volunteer', '16');
            $table->string('password_volunteer', '256');
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
        Schema::drop('volunteer');
    }
}
