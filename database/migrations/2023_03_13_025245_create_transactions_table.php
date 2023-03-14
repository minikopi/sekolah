<?php

use App\Models\School;
use App\Models\Student;
use App\Models\Tuition;
use App\Models\PaymentType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(School::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Tuition::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Student::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(PaymentType::class)->nullable()->constrained()->nullOnDelete();
            $table->double('price')->nullable();
            $table->string('status')->nullable();
            $table->enum('is_sent', [0,1])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
