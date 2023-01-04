<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{

    protected $filablle=['name','ablities'];


    public function users(){
        return $this->belongsToMany(User::class);

    }
}
