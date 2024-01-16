<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdProfesor');
            $table->string('materia');
            $table->unsignedBigInteger('idEstudiante');
            $table->string('asistio');
            $table->timestamps();
        
            $table->foreign('idEstudiante')
                  ->references('id')
                  ->on('alumnos')
                  ->onDelete('cascade');

            $table->foreign('IdProfesor')
                ->references('id')
                ->on('docentes')
                ->onDelete('cascade');
        });
    }        

    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
;