<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nickname',
        'grade_number',
        'phone',
        'sosmed',
        'email',
        'password',
        'gender',
        'birthdate',
        'nationality',
        'address',
        'city',
        'province',
        'country',
        'postcode',
        'photo',
        'note',
    ];

    public function extracurricular() : HasOne {
        return $this->hasOne(Extracurricular::class);
    }

    public function punyaExtra() : HasMany {
        return $this->hasMany(StudentExtracurricular::class, 'student_id', 'id');
    }
}
