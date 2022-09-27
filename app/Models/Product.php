<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}


