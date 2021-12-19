<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_surveys', function (Blueprint $table) {
            $table->foreignId('id_data');
            $table->binary('foto');
            $table->text('keterangan');
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
        Schema::dropIfExists('foto_surveys');
    }
}
