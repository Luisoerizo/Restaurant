<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $guarded = ['id','created_at','updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
        
    }

    //relación muchos a muchos
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
