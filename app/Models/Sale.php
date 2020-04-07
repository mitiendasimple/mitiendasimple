<?php

namespace App\Models;

use App\Models\Traits\Uuidable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sale
 * @package App\Models
 * @property-read int $id
 * @property-read string $uuid
 * @property-read \Carbon\Carbon $created_at
 * @property-read \Carbon\Carbon $updated_at
 * @property-read \Carbon\Carbon $deleted_at
 * @property-read int $created_by
 * @property-read int $updated_by
 * @property-read int $deleted_by
 */
class Sale extends Model
{
    use SoftDeletes, Uuidable;

    /**
     * @var array
     */
    protected $fillable = [

    ];
}
