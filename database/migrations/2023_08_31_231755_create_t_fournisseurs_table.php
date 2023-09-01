<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('adresse');
            $table->integer('prix');
            $table->string('commune');
            $table->string('telephone');
            $table->string('fixe');
            $table->string('email');
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
        Schema::dropIfExists('t_fournisseurs');
    }
}
