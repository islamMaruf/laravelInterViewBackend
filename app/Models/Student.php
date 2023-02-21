<?php

namespace App\Models;

use App\Traits\HasCommonTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory,HasCommonTrait;
    public function institute(): BelongsTo
    {
        return $this->belongsTo(Institution::class,'institution_id','id');
    }
   public function  studentAttribute(): BelongsToMany
   {
        return $this->belongsToMany(StudentAttribute::class,'student_custom_attribute_value','student_id','student_attribute_id')->withPivot('value');
   }
}
