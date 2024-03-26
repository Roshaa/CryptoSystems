<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    no historico de trades deve ser possivel criar uma estrategia diretamente
    no historico de trades deve ser possivel repetir uma trade diretamente
    conditions (tava no trabalho)eliminadas, deve estar apenas no historico
    mudar o nome apenas pa trade
    
    public function up(): void
    {
        Schema::create('newtrades', function (Blueprint $table) {
            $table->id();
            $table->text('coin');
            $table->text('type');
            $table->text('entryprice');
            falta o close price
            $table->text('status');
            ao fechar tambem deve fazer um calculo automatico do profit/loss

            tem que ir buscar um strategy id, pode ser nulo
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
