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
            $table->unsignedInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('team1');
            $table->string('team2');
            $table->string('team3');
            $table->string('team4');
            $table->string('team5');
            $table->string('team6');
            $table->string('team7');
            $table->string('team8');
            $table->string('team9');
            $table->string('team10');
            $table->string('team11');
            $table->string('team12');
            $table->string('team13');
            $table->string('team14')->nullable();
            $table->string('team15')->nullable();
            $table->string('team16')->nullable();

            $table->integer('spread1');
            $table->integer('spread2');
            $table->integer('spread3');
            $table->integer('spread4');
            $table->integer('spread5');
            $table->integer('spread6');
            $table->integer('spread7');
            $table->integer('spread8');
            $table->integer('spread9');
            $table->integer('spread10');
            $table->integer('spread11');
            $table->integer('spread12');
            $table->integer('spread13');
            $table->integer('spread14')->nullable();
            $table->integer('spread15')->nullable();
            $table->integer('spread16')->nullable();




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
