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
        Schema::create('frizeri', function (Blueprint $table) {
            $table->id();
            $table->string('imePrezime',30);
            $table->integer('godineIskustva');
            $table->integer('rang');
            $table->string('kontakt',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frizeri');
    }
};
