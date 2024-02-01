<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'body',
        'active',
        'poblished_at',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categoties()
    {
        return $this->belongsToMany(Category::class);
    }
}
