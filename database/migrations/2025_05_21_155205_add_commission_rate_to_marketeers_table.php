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
        Schema::table('marketeers', function (Blueprint $table) {
            $table->integer('commission_rate')->default(0)->comment('Commission rate in percentage');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('marketeers', function (Blueprint $table) {
            //
        });
    }
};
