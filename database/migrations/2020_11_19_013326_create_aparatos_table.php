<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAparatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aparatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion',100); 
            $table->string('estado',100);
            $table-> unsignedBigInteger('id_salas');
            $table->timestamps();
            $table->foreign('id_salas')->references('id')->on('salas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aparatos');
    }
}
