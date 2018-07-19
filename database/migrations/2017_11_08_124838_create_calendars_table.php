<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->increments('agenda_id');
            $table->date('fecha');
            $table->string('hora');
            $table->integer('paciente_id')->unsigned();
            $table->integer('profesional_salud_id')->unsigned();
            $table->integer('agenda_estado_id')->unsigned();
            $table->foreign('paciente_id')->references('paciente_id')->on('patients');
            $table->foreign('profesional_salud_id')->references('profesional_salud_id')->on('health__professionals');
            $table->foreign('agenda_estado_id')->references('agenda_estado_id')->on('status__calendars');
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
        Schema::dropIfExists('calendars');
    }
}
