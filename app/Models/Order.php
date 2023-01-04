<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'street_address', 'phone', 'email', 'total', 'country', 'city', 'zip', 'status'
    ];



    public function product()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'user_id', 'product_id');
    }
}
