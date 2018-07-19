<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('paciente_id');
            $table->string('identificacion',20);
            $table->string('primer_nombre',45);
            $table->string('segundo_nombre',45)->nullable();
            $table->string('primer_apellido',45);
            $table->string('segundo_apellido',45)->nullable();
            $table->string('sexo',12);
            $table->string('direccion_domicilio',45);
            $table->integer('telefono')->nullable();
            $table->integer('celular')->nullable();
            $table->date('fecha_nacimiento');
            $table->integer('estado_civil_id')->unsigned()->nullable();
            $table->integer('tipo_identificacion_id')->unsigned();
            $table->integer('formacion_id')->unsigned();
            $table->foreign('estado_civil_id')->references('estado_civil_id')->on('marital__statuses');
            $table->foreign('tipo_identificacion_id')->references('tipo_identificacion_id')->on('kind__ids');
            $table->foreign('formacion_id')->references('formacion_id')->on('education');
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
        Schema::dropIfExists('patients');
    }
}
