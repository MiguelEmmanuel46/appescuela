<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->increments('id_profesor');
            $table->string('nombre_profesor');
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
        Schema::dropIfExists('profesores');
    }
}
