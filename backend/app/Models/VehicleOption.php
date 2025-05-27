<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleOption extends Model
{
    protected $table = 'options';
    protected $guarded = [];

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_options');
    }
}
