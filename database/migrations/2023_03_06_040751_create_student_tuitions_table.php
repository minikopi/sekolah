<?php

use App\Models\Grade;
use App\Models\Student;
use App\Models\TuitionType;
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
        Schema::create('student_tuitions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(School::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Student::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(TuitionType::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Grade::class)->nullable()->constrained()->nullOnDelete();
            $table->double('price')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_tuitions');
    }
};
