<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('existingtrade', function (Blueprint $table) {
            $table->id();
            $table->text('coin');
            $table->text('conditions');
            $table->boolean('win');
            $table->integer('percentageofwin');
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
