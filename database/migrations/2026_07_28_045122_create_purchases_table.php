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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('purchase_no',30)->unique();
            $table->foreignId('supplier_id')->constrained()->restrictOnDelete();
            $table->date('purchase_date');
            $table->date('invoice_date')->nullable();
            $table->string('invoice_no',50)->nullable();

            $table->decimal('subtotal',15,2)->default(0);
            $table->decimal('discount_amount',15,2)->default(0);
            $table->decimal('tax_amount',15,2)->default(0);
            $table->decimal('shipping_cost',15,2)->default(0);
            $table->decimal('other_cost',15,2)->default(0);
            $table->decimal('total_amount',15,2)->default(0);
            $table->decimal('tax_percent',5,2)->default(0);

            $table->decimal('paid_amount',15,2)->default(0);
            $table->decimal('due_amount',15,2)->default(0);
            $table->enum('payment_status',['pending','partial','paid'])->default('pending');
            $table->enum('payment_method',['cash', 'bank', 'mobile_banking', 'cheque', 'other'])->nullable();

            $table->enum('status',['draft','ordered','received','completed','cancelled'])->default('draft');
            $table->text('note')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
