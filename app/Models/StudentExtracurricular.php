<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentExtracurricular extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'extracurricular_id',
        'satpam_id'
    ];

    public function banyakStudent() : BelongsTo {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
    public function banyakExtra() : BelongsTo {
        return $this->belongsTo(Extracurricular::class, 'extracurricular_id', 'id');
    }
    public function banyakSatpam() : BelongsTo {
        return $this->belongsTo(Satpam::class, 'satpam_id', 'id');
    }
}
