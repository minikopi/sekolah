<?php

namespace App\Models;

use App\Models\Type;
use App\Models\School;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentTuition extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function tuition_type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
    
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
