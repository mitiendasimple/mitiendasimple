<?php

namespace App\Models\Traits;

use Ramsey\Uuid\Uuid;

/**
 * Trait Uuidable
 * @package App\Models\Traits
 */
trait Uuidable
{
    /**
     *
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($query) {
            $query->uuid = Uuid::uuid4();
        });
    }
}
