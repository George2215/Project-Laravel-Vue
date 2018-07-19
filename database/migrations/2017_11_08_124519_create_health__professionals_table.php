<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health__professionals', function (Blueprint $table) {
            $table->increments('profesional_salud_id');
            $table->string('tarjeta_profesional');
            $table->integer('empleado_id')->unsigned();
            $table->foreign('empleado_id')->references('empleado_id')->on('employees');
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
        Schema::dropIfExists('health__professionals');
    }
}
