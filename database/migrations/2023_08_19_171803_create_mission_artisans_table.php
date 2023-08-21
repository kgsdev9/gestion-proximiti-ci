<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionArtisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mission_artisans', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->text('description');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->unsignedBigInteger('artisan_id');
            $table->foreign('artisan_id')->references('id')->on('artisans')->onDelete('CASCADE');
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
        Schema::dropIfExists('mission_artisans');
    }
}
