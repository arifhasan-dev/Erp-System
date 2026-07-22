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
            Schema::create('suppliers', function (Blueprint $table) {
                $table->id();
                $table->string('code')->unique();
                $table->string('name');
                $table->string('image')->nullable();
                $table->string('email')->nullable();
                $table->string('phone',20)->unique();
                $table->enum('supplier_type',['local','international'])->default('local');
                $table->string('country')->default('Bangladesh');
                $table->string('city')->nullable();
                $table->text('address')->nullable();
                $table->string('payment_term')->nullable();
                $table->string('currency',10)->default('BDT');
                $table->string('company_name')->nullable();
                $table->string('company_image')->nullable();
                $table->string('company_email')->nullable();
                $table->string('company_phone',20)->nullable();
                $table->string('company_website')->nullable();
                $table->text('company_address')->nullable();
                $table->string('tax_number')->nullable();
                $table->string('industry_type')->nullable();
                $table->tinyInteger('status')->default(true);
                $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
                $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
                $table->softDeletes();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('suppliers');
        }
    };
