<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = ['brandName','modelName'];

    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
