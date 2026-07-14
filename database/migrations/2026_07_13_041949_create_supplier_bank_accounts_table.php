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
        Schema::create('supplier_bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->constrained()->cascadeOnDelete();
            $table->string('bank_name');
            $table->string('account_name');
            $table->enum('account_type',[
                'savings',
                'current',
                'other',
            ])->default('savings');
            $table->string('account_number');
            $table->string('swift_iban')->nullable();
            $table->string('routing_number')->nullable();
            $table->string('branch_code')->nullable();
            $table->string('bank_city')->nullable();
            $table->string('bank_country')->nullable();
            $table->boolean('is_primary')->default(true);
            $table->boolean('default_payment')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_bank_accounts');
    }
};
