<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtisanSpecialityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artisan_speciality', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artisan_id');
            $table->unsignedBigInteger('speciality_id');
            $table->foreign('artisan_id')->references('id')->on('artisans');
            $table->foreign('speciality_id')->references('id')->on('specialities');
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
        Schema::dropIfExists('artisan_speciality');
    }
}
