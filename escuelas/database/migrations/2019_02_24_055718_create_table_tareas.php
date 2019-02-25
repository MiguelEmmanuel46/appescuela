<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->increments('id_tarea');
            $table->longText('contenido');
            $table->integer('id_grado')->unsigned();
            $table->integer('id_grupo')->unsigned();
            $table->foreign('id_grado')->references('id_grado')->on('grados');
            $table->foreign('id_grupo')->references('id_grupo')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tareas');
    }
}
