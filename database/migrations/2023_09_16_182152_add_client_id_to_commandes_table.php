<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClientIdToCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commandes', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commandes', function (Blueprint $table) {
            //
        });
    }
}
