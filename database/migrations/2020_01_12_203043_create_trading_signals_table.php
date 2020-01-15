<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradingSignalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trading_signals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pair');
            $table->string('signal');
            $table->string('entry');
            $table->string('stop_loss')->nullable();
            $table->string('take_profit')->nullable();
            $table->string('price')->default(0);
            $table->boolean('won')->nullable();
            $table->string('outcome')->nullable();
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
        Schema::dropIfExists('trading_signals');
    }
}
