<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['user_id','category_id', 'title', 'paragraph', 'price', 'color', 'image','reads','date_of_year','millage','transmission','oil_type','condition','address'];

    public function incrementReadCount() {
        $this->reads++;
        return $this->save();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    } 

    public function images(){
        return $this->hasMany(Images::class);
    } 
    public function oneimage(){
        return $this->images()->take(1);
        // return $this->images()->first();
    } 


    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
