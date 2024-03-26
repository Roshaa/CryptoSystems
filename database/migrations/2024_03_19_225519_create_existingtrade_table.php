<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    Alterar tabela para strategy

    public function up(): void
    {
        Schema::create('existingtrade', function (Blueprint $table) {

            $table->id();
            $table->text('coin');
            $table->text('conditions');
            $table->text('type');
            $table->integer('wins');
            $table->integer('losses');
            $table->integer('winrate');
            $table->text('testedcoins');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('existingtrade');
    }
};
