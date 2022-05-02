<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

/**
 * @method static find($id)
 * @method static where(string $string, $id)
 * @method static get()
 * @property mixed $text
 * @property mixed $title
 * @property mixed $description
 * @property mixed $id
 */
class Post extends Model
{
    use HasFactory;
    use Searchable;

    public function toSearchableArray(): array
    {
        return [
            'title' => $this->title,
            'text' => $this->text,
            'description' => $this->description,
        ];
    }

    protected $fillable = [
        'title',
        'description',
        'text',
        'image'
    ];

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
