<?php

namespace App\Models;

use App\Models\School;
use App\Models\Student;
use App\Models\PaymentType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    
    public function tuition(): BelongsTo
    {
        return $this->belongsTo(Tuition::class);
    }
    
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
    
    public function payment_type(): BelongsTo
    {
        return $this->belongsTo(PaymentType::class);
    }
    
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
