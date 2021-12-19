<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdDataSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_data_surveys', function (Blueprint $table) {
            $table->id('id_data');
            $table->foreignId('id_user');
            $table->enum('status_data', ['Lengkap', 'Belum Lengkap']);
            $table->integer('data_stat');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('id_data_surveys');
    }
}
