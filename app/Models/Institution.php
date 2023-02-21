<?php

namespace App\Models;

use App\Traits\HasCommonTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Institution extends Model
{
    use HasFactory;

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function studentAttributes(): HasMany
    {
        return $this->hasMany(StudentAttribute::class);
    }
}
