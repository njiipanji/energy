<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Project extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->string('id_project', '8');
            $table->primary('id_project');
            $table->string('nama_project', '32');
            $table->string('tempat_project', '64');
            $table->timestamp('tgl_mulai_project')->nullable();
            $table->timestamp('tgl_akhir_project')->nullable();
            $table->string('keterangan_project','2048');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('project');
    }
}
