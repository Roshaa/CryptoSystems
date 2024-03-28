<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Alterar tabela para strategy

    public function up(): void
    {
        Schema::create('strategies', function (Blueprint $table) {

            $table->id();
            $table->text('coin');
            $table->text('conditions');
            $table->text('type');
            $table->integer('wins')->default(0);
            $table->integer('losses')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strategy');
    }
};
