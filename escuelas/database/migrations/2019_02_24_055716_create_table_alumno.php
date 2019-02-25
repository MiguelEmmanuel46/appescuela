<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->integer('matricula');
            $table->string('nombre_alumno');
            $table->integer('id_grado')->unsigned();
            $table->integer('id_grupo')->unsigned();
            $table->string('foto')->nullable('true');
            $table->primary('matricula');
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
        Schema::dropIfExists('alumnos');
    }
}
