<?php

namespace App\Models;

use App\Models\Staff;
use App\Models\School;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassroomStaff extends Model
{
    use HasFactory, SoftDeletes;

    
    public function staff(): HasMany
    {
        return $this->hasMany(Staff::class);
    }
    
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
