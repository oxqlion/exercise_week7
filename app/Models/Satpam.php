<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Satpam extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    public function njaga() : HasMany {
        return $this->hasMany(StudentExtracurricular::class, 'satpam_id', 'id');
    }
}
