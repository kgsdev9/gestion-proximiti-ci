<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionSpecialiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mission_specialite', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mission_id')->nullable();
            $table->unsignedBigInteger('speciality_id')->nullable();
            $table->foreign('mission_id')->references('id')->on('missions')->onDelete('CASCADE');
            $table->foreign('specialite_id')->references('id')->on('specialities')->onDelete('CASCADE');
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
        Schema::dropIfExists('mission_specialite');
    }
}
