<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToDiskon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diskon', function (Blueprint $table) {
            $table->unsignedBigInteger('PeriodeID');
            $table->foreign('PeriodeID')->references('PeriodeID')->on('periode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diskon', function (Blueprint $table) {
            //
        });
    }
}
