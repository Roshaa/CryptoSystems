<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //no historico de trades deve ser possivel criar uma estrategia diretamente
    //no historico de trades deve ser possivel repetir uma trade diretamente
    //conditions (tava no trabalho)eliminadas, deve estar apenas no historico
    //ao fechar tambem deve fazer um calculo automatico do profit/loss
    
    public function up(): void
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('strategy_id')->nullable();
            $table->text('coin');
            $table->text('conditions');
            $table->text('type');
            $table->integer('entryprice');
            $table->integer('exitprice')->nullable();
            $table->text('status');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newtrades');
    }
};
