<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBettingOddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('betting_odds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('match');
            $table->string('pick');
            $table->string('odd');
            $table->string('kick_off');
            $table->integer('price')->nullable(0);
            $table->string('outcome')->nullable();
            $table->boolean('won')->default(false);
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
        Schema::dropIfExists('betting_odds');
    }
}
