<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * @package App\Models
 * @property-read int $id
 * @property string $name
 * @property-read \Carbon\Carbon $created_at
 * @property-read \Carbon\Carbon $updated_at
 * @property-read \Carbon\Carbon $deleted_at
 * @property-read int $created_by
 * @property-read int $updated_by
 * @property-read int $deleted_by
 */
class Tag extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
