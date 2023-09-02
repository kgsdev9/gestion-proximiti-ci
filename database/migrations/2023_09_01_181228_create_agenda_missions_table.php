<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_missions', function (Blueprint $table) {
        $table->id();
        $table->string('libelle');
        $table->string('date_debut');
        $table->string('date_fin');
        $table->string('description')->nullable();
        $table->unsignedBigInteger('artisan_id');
        $table->foreign('artisan_id')->references('id')->on('artisans');
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
        Schema::dropIfExists('agenda_missions');
    }
}
