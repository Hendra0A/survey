<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRukoDpnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruko_dpns', function (Blueprint $table) {
            $table->foreignId('id_data');
            $table->enum('jenis_ruko', ['kiri', 'kanan']);
            $table->integer('jml_unit');
            $table->integer('jml_lantai');
            $table->timestamps();

            $table->foreign('id_data')->references('id_data')->on('id_data_surveys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruko_dpns');
    }
}
