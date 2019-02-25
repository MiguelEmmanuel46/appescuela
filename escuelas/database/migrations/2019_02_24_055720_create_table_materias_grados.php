<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMateriasGrados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias_grados', function (Blueprint $table) {
            $table->integer('id_grado')->unsigned();
            $table->integer('id_materia')->unsigned();
            $table->foreign('id_grado')->references('id_grado')->on('grados');            
            $table->foreign('id_materia')->references('id_materia')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias_grados');
    }
}
