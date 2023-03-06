<?php

use App\Models\AcademicYear;
use App\Models\User;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->nullable()->constrained()->nullOnDelete();
            $table->string('name', 50)->nullable();
            $table->string('gender', 20)->nullable();
            $table->text('address')->nullable();
            $table->string('dob', 50)->nullable();
            $table->string('religion')->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->string('nik', 16)->nullable();
            $table->string('nisn', 10)->nullable();
            $table->string('father_name', 50)->nullable();
            $table->string('father_dob', 50)->nullable();
            $table->string('father_work', 50)->nullable();
            $table->string('father_education', 50)->nullable();
            $table->string('father_income', 50)->nullable();
            $table->string('mother_name', 50)->nullable();
            $table->string('mother_dob', 50)->nullable();
            $table->string('mother_work', 50)->nullable();
            $table->string('mother_education', 50)->nullable();
            $table->string('mother_income', 50)->nullable();
            $table->string('guardian_name', 50)->nullable();
            $table->string('guardian_dob', 50)->nullable();
            $table->string('guardian_work', 50)->nullable();
            $table->string('guardian_education', 50)->nullable();
            $table->string('guardian_income', 50)->nullable();
            $table->foreignIdFor(AcademicYear::class)->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
