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
        Schema::create('stock_adjustments', function (Blueprint $table) {
            $table->id();
            $table->string('adjustment_no')->unique();
            $table->foreignId('product_id')->constrained()->restrictOnDelete();
            $table->date('adjustment_date');
            $table->enum('type',['increase','decrease']);
            $table->decimal('quantity',12,2);
            $table->enum('reason',['damaged','expired','lost','found','manual_correction','stock_count']);
            $table->enum('status',['draft','approved','cancelled'])->default('approved');
            $table->text('note')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_adjustments');
    }
};
