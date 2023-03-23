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
        Schema::table('frizeri', function (Blueprint $table) {
            $table->renameColumn('rang', 'rangFrizera');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() 
    {
        Schema::table('frizeri', function (Blueprint $table) {
            $table->renameColumn('rangFrizera', 'rang');
        });
    }
};
