<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Extracurricular extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'requirements', 'price', 'tutor_name'
    ];

    public function student() : BelongsTo {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function punyaStudent() : HasMany {
        return $this->hasMany(StudentExtracurricular::class, 'extracurricular_id', 'id');
    }
}
