<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('empleado_id');
            $table->string('identificacion',20);
            $table->string('primer_nombre',45);
            $table->string('segundo_nombre',45)->nullable();
            $table->string('primer_apellido',45);
            $table->string('segundo_apellido',45)->nullable();
            $table->date('fecha_nacimiento');
            $table->integer('telefono');
            $table->string('usuario',45);
            $table->string('password',45);
            $table->integer('rol_id')->unsigned();
            $table->foreign('rol_id')->references('rol_id')->on('roles');
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
        Schema::dropIfExists('employees');
    }
}
