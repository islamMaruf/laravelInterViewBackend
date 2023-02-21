<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait HasCommonTrait
{

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('institutionId', function (Builder $builder) {
            $builder->where('institution_id', 1);
        });


    }
}
