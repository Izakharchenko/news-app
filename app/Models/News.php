<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        // 'user_id',
        'title',
        'cover',
        'body',
        'source',
        'author'
    ];

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
