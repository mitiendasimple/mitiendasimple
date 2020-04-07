<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * @package App\Models
 * @property-read int $id
 * @property string $path
 * @property string $name
 * @property string $slug
 * @property-read \Carbon\Carbon $created_at
 * @property-read \Carbon\Carbon $updated_at
 * @property-read \Carbon\Carbon $deleted_at
 * @property-read int $created_by
 * @property-read int $updated_by
 * @property-read int $deleted_by
 */
class Image extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'path', 'name', 'slug'
    ];
}
