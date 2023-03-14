<?php

namespace App\Models;

use App\Models\School;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassroomStudent extends Model
{
    use HasFactory, SoftDeletes;
    
    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }
    
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
