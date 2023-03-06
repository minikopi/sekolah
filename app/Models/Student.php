<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
