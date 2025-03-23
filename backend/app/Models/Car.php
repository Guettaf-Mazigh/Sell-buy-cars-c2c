<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use League\Uri\Idna\Option;

class Car extends Model
{
    public function options() : BelongsToMany{
        return $this->belongsToMany(Option::class,'car_options');
    }
}
