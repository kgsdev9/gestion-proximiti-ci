<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->enum('type', ['devis', 'facture']);
            $table->enum('status', ['En attente', 'Términe', 'Suspendu']);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('artisan_id');
            $table->unsignedBigInteger('client_id');
            $table->foreign('artisan_id')->references('id')->on('artisans');
            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::dropIfExists('missions');
    }
}
