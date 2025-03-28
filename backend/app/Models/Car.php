<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use League\Uri\Idna\Option;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function options() : BelongsToMany{
        return $this->belongsToMany(Option::class,'car_options');
    }

    public function model() : BelongsTo{
        return $this->belongsTo(CarModel::class,'model_id');
    }

    public function user() : BelongsTo{
        return $this->belongsTo(User::class,'user_id');
    }
}
