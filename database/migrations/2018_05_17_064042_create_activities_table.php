<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_evento');
            $table->string('actividad');
            $table->unsignedInteger('id_lugar');
            $table->datetime('fecha');
            $table->unsignedInteger('id_estado');
            $table->timestamps();

            $table->foreign('id_evento')->references('id')->on('events');
            $table->foreign('id_lugar')->references('id')->on('places');
            $table->foreign('id_estado')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
