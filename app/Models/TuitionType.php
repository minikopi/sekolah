<?php

namespace App\Models;

use App\Models\School;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TuitionType extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function student_tuition(): HasMany
    {
        return $this->hasMany(StudentTuition::class);
    }

    public function tuition(): HasMany
    {
        return $this->hasMany(Tuition::class);
    }
    
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
