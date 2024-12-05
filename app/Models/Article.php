<?php

namespace App\Models;

use App\Models\Categoriable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'article_id',
        'title',
        'slug',
        'content',
        'status',
        'category_id',
        'user_id'
    ];

    protected $dates = ['created_at'];

    protected function casts(): array
    {
        return [
            'category_id' => 'integer',
        ];
    }

    public function uniqueIds(): array
    {
        return ['article_id'];
    }

    public function getFormattedTimestampAttribute()
    {
        return Carbon::parse('created_at')->format('d-m-y');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    // public function categories(): MorphToMany
    // {
    //     return $this->morphToMany(Category::class, 'categoriable', Categoriable::class);
    // }
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
