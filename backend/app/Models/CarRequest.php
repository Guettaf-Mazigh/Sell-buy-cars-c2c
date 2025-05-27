<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarRequest extends Model
{
    protected $guarded = [];
    protected $table = 'requests';
     
    public function car() : BelongsTo{
        return $this->belongsTo(Car::class);
    }
}
