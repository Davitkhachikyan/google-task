<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static where(string $string, $id)
 * @property mixed $post_id
 * @property mixed $name
 */
class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'post_id'
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo('App\Post', 'posts_id');
    }
}
