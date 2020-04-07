<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Attribute
 * @package App\Model
 * @property-read int $id
 * @property-read \Carbon\Carbon $created_at
 * @property-read \Carbon\Carbon $updated_at
 */
class Attribute extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'key', 'value', 'product_id'
    ];
}
