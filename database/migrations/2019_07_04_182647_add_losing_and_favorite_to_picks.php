<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLosingAndFavoriteToPicks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('picks', function (Blueprint $table) {
            $table->string('losing1');
            $table->string('losing2');
            $table->string('losing3');
            $table->string('losing4');
            $table->string('losing5');
            $table->string('losing6');
            $table->string('losing7');
            $table->string('losing8');
            $table->string('losing9');
            $table->string('losing10');
            $table->string('losing11');
            $table->string('losing12');
            $table->string('losing13');
            $table->string('losing14')->nullable();
            $table->string('losing15')->nullable();
            $table->string('losing16')->nullable();

            $table->string('favorite1');
            $table->string('favorite2');
            $table->string('favorite3');
            $table->string('favorite4');
            $table->string('favorite5');
            $table->string('favorite6');
            $table->string('favorite7');
            $table->string('favorite8');
            $table->string('favorite9');
            $table->string('favorite10');
            $table->string('favorite11');
            $table->string('favorite12');
            $table->string('favorite13');
            $table->string('favorite14')->nullable();
            $table->string('favorite15')->nullable();
            $table->string('favorite16')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('picks', function (Blueprint $table) {
            $table->dropColumn('losing1');
            $table->dropColumn('losing2');
            $table->dropColumn('losing3');
            $table->dropColumn('losing4');
            $table->dropColumn('losing5');
            $table->dropColumn('losing6');
            $table->dropColumn('losing7');
            $table->dropColumn('losing8');
            $table->dropColumn('losing9');
            $table->dropColumn('losing10');
            $table->dropColumn('losing11');
            $table->dropColumn('losing12');
            $table->dropColumn('losing13');
            $table->dropColumn('losing14')->nullable();
            $table->dropColumn('losing15')->nullable();
            $table->dropColumn('losing16')->nullable();

            $table->dropColumn('favorite1');
            $table->dropColumn('favorite2');
            $table->dropColumn('favorite3');
            $table->dropColumn('favorite4');
            $table->dropColumn('favorite5');
            $table->dropColumn('favorite6');
            $table->dropColumn('favorite7');
            $table->dropColumn('favorite8');
            $table->dropColumn('favorite9');
            $table->dropColumn('favorite10');
            $table->dropColumn('favorite11');
            $table->dropColumn('favorite12');
            $table->dropColumn('favorite13');
            $table->dropColumng('favorite14')->nullable();
            $table->dropColumn('favorite15')->nullable();
            $table->dropColumn('favorite16')->nullable();
        });
    }
}
