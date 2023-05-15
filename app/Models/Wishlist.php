<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id'
    ];

    public function posts()
{
    return $this->belongsToMany(Post::class);
}

public function users()
{
    return $this->belongsToMany(User::class);
}
}
