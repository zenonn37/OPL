<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picks', function (Blueprint $table) {

            $table->increments('id');
            $table->string('team1');
            $table->string('team2');
            $table->string('team3');
            $table->string('team4');
            $table->integer('spread1');
            $table->integer('spread2');
            $table->integer('spread3');
            $table->integer('spread4');




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
        Schema::dropIfExists('picks');
    }
}
