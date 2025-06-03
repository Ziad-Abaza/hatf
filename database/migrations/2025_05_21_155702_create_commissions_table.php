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
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marketeer_id');
            $table->foreign('marketeer_id')->references('id')->on('marketeers')->cascadeOnDelete();
            $table->unsignedBigInteger('payment_id');
            $table->foreign('payment_id')->references('id')->on('payments')->cascadeOnDelete();
            $table->double('amount');
            $table->boolean('paid')->default(false);
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commissions');
    }
};
