<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artisans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('num_whattsapp')->nullable();
            $table->string('adresse');
            $table->string('photo');
            $table->string('email')->nullable();
            $table->text('description')->nullable();
            $table->string('commune');
            $table->string('date_adhesion');
            $table->string('zone_intervention')->nullable();
            $table->string('status')->default('disponible');
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
        Schema::dropIfExists('artisans');
    }
}
