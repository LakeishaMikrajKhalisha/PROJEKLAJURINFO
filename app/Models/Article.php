<?php

namespace App\Models;

use App\Models\Categoriable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['judulArtikel', 'isiArtikel'];
public function categories() 
{
    return $this->belongsToMany(Category::class, 'category_article');
}
}
