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
        Schema::create('termini', function (Blueprint $table) {
            $table->id();
            $table->string('datum');
            $table->string('vreme');
            $table->foreignId('frizer_id')->constrained('frizeri');
            $table->foreignId('frizura_id')->constrained('frizure');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('termini');
    }
};
