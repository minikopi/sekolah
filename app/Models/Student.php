<?php

namespace App\Models;

use App\Models\User;
use App\Models\School;
use App\Models\AcademicYear;
use App\Models\StudentTuition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function student_tuition(): HasMany
    {
        return $this->hasMany(StudentTuition::class);
    }

    public function academic_year(): HasOne
    {
        return $this->hasOne(AcademicYear::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
