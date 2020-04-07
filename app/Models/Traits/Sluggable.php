<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

/**
 * Trait Sluggable
 * @package App\Models\Traits
 */
trait Sluggable
{
    /**
     *
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($query) {
            $query->slug = Str::slug($this->name);
        });
    }

}
