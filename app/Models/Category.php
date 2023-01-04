<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name', 'description', 'slug', 'parint_id', 'image'];

    public function products()
    {
        return $this->hasMany(Product::class,'category_id', 'id');
    }
}
