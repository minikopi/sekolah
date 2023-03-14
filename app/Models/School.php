<?php

namespace App\Models;

use App\Models\User;
use App\Models\Grade;
use App\Models\Staff;
use App\Models\Student;
use App\Models\Tuition;
use App\Models\Classroom;
use App\Models\PaymentType;
use App\Models\Transaction;
use App\Models\TuitionType;
use App\Models\AcademicYear;
use App\Models\ClassroomStaff;
use App\Models\StudentTuition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class School extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function academic_year(): HasMany
    {
        return $this->hasMany(AcademicYear::class);
    }

    public function classroom(): HasMany
    {
        return $this->hasMany(Classroom::class);
    }

    public function classroom_staff(): HasMany
    {
        return $this->hasMany(ClassroomStaff::class);
    }

    public function classroom_student(): HasMany
    {
        return $this->hasMany(Classroom::class);
    }
    
    public function grade(): HasMany
    {
        return $this->hasMany(Grade::class);
    }
    
    public function payment_type(): HasMany
    {
        return $this->hasMany(PaymentType::class);
    }
    
    public function staff(): HasMany
    {
        return $this->hasMany(Staff::class);
    }
    
    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }
    
    public function student_tuition(): HasMany
    {
        return $this->hasMany(StudentTuition::class);
    }
    
    public function transaction(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
    
    public function tuition(): HasMany
    {
        return $this->hasMany(Tuition::class);
    }
    
    public function tuition_type(): HasMany
    {
        return $this->hasMany(TuitionType::class);
    }

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
