<?php

namespace App\Models;

use App\Models\Grade;
use App\Models\School;
use App\Models\AcademicYear;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function academic_year(): HasMany
    {
        return $this->hasMany(AcademicYear::class);
    }
    
    public function grade(): HasMany
    {
        return $this->hasMany(Grade::class);
    }
    
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
