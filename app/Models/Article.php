<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'contenu', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
