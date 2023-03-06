<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tuition extends Model
{
    use HasFactory, SoftDeletes;

    public function type(): HasMany
    {
        return $this->hasMany(Type::class);
    }

    public function academic_year(): HasMany
    {
        return $this->hasMany(AcademicYear::class);
    }

    public function grade(): HasMany
    {
        return $this->hasMany(Grade::class);
    }
}
