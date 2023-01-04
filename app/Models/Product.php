<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = "products";
    protected $fillable = ['name', 'description', 'price', 'image', 'category_id'];




    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id')->withDefault();
    }

    public function images()
    {

        return $this->hasMany(ProductImage::class);
    }
    public $timestamps = false;


    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'product_tag', 'tag_id', 'product_id');
    }
    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_products', 'order_id', 'user_id');
    }
}
