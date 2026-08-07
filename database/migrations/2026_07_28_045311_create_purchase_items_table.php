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
        Schema::create('purchase_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained()->restrictOnDelete();

            $table->string('product_code',50)->nullable();
            $table->string('product_name',150);
            $table->string('unit_name',50)->nullable();

            $table->decimal('ordered_quantity',12,2);
            $table->decimal('received_quantity',12,2)->default(0);

            $table->decimal('unit_cost',15,2);
            $table->decimal('discount_amount',15,2)->default(0);
            $table->decimal('tax_amount',15,2)->default(0);
            $table->decimal('tax_percent',5,2)->default(0);

            $table->decimal('line_total',15,2);
            $table->foreignId('unit_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_items');
    }
};
