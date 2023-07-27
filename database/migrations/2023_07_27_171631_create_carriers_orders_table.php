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
        Schema::create('carriers_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrier_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->float('total_price', 16, 2);
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carriers_orders');
    }
};
