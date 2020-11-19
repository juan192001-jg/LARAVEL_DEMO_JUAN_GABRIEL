<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsitenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asitencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fecha',50);
            $table->string('hora');
            $table->unsignedBigInteger('id_clases');
            $table->timestamps();
            $table->foreign('id_clases')->references('id')->on('clases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asitencias');
    }
}
