<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 * @package App\Models
 * @property-read int $id
 * @property string $body
 * @property int|null $user_id
 * @property int $product_id
 * @property-read \Carbon\Carbon $created_at
 * @property-read \Carbon\Carbon $updated_at
 * @property-read \Carbon\Carbon $deleted_at
 * @property-read int $created_by
 * @property-read int $updated_by
 * @property-read int $deleted_by
 */
class Comment extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'body', 'user_id', 'product_id'
    ];
}
