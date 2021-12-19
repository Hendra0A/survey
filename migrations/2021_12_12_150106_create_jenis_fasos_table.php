<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisFasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_fasos', function (Blueprint $table) {
            $table->foreignId('id_data');
            $table->string('nama_fasos');
            $table->integer('jml_fasos');
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
        Schema::dropIfExists('jenis_fasos');
    }
}
