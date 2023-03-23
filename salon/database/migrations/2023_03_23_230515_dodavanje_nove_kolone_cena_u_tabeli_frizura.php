<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('frizura', function (Blueprint $table) {
            $table->after('tezinaFrizure', function ($table) {
                $table->string('cena');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('gledaoci', function (Blueprint $table) {
            $table->dropColumn('cena');
        });
    }
};
