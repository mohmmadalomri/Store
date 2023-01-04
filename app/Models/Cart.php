<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\MockObject\ClassIsFinalException;

class Cart extends Model
{

    protected $fillable=['uuid','product_id','user_id','quantity'];



    public function product(){

        return $this->belongsTo(Product::class,'product_id','id');
    }
   
}
