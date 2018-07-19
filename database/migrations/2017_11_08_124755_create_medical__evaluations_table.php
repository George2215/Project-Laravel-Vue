<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical__evaluations', function (Blueprint $table) {
            $table->increments('evaluacion_id');
            $table->string('signo_vital',300);
            $table->string('motivo_consulta',300);
            $table->string('antecedente_paciente',300);
            $table->date('fecha');
            $table->time('hora');
            $table->string('tratamiento',300);
            $table->string('examen_fisico',300);
            $table->integer('edad');
            $table->float('imc',8,2);
            $table->integer('diagnostico_id')->unsigned();            
            $table->integer('paciente_id')->unsigned()->nullable();
            $table->integer('profesional_salud_id')->unsigned()->nullable();
            $table->foreign('diagnostico_id')->references('diagnostico_id')->on('diagnostics');
            $table->foreign('paciente_id')->references('paciente_id')->on('patients');            
            $table->foreign('profesional_salud_id')->references('profesional_salud_id')->on('health__professionals');     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical__evaluations');
    }
}
