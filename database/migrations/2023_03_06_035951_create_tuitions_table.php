<?php

use App\Models\AcademicYear;
use App\Models\Grade;
use App\Models\Type;
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
        Schema::create('tuitions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Type::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(AcademicYear::class)->nullable()->constrained()->nullOnDelete();
            $table->string('name');
            $table->double('price');
            $table->foreignIdFor(Grade::class)->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuitions');
    }
};
