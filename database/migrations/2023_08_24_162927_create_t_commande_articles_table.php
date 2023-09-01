<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCommandeArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_commande_articles', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->integer('quantite');
            $table->string('prix');
            $table->string('total');
            $table->unsignedBigInteger('commande_id');
            $table->unsignedBigInteger('artisan_id')->nullable();
            $table->foreign('artisan_id')->references('id')->on('artisans');
            $table->foreign('commande_id')->references('id')->on('commandes')->onDelete('CASCADE');
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
        Schema::dropIfExists('t_commande_articles');
    }
}
