<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mengikuti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mengikuti', function (Blueprint $table) {
            $table->string('id_volunteer', '8');
            $table->string('id_project', '8');

            $table->foreign('id_volunteer')->references('id_volunteer')->on('volunteer');
            $table->foreign('id_project')->references('id_project')->on('project');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mengikuti');
    }
}
