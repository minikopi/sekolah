<?php

namespace App\Models;

use App\Models\School;
use App\Models\Classroom;
use App\Models\StudentTuition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grade extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function tuition(): HasMany
    {
        return $this->hasMany(Tuition::class);
    }

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }
    
    public function student_tuition(): BelongsTo
    {
        return $this->belongsTo(StudentTuition::class);
    }
    
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
