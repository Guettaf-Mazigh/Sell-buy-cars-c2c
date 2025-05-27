<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
  protected $fillable = ['name','email','password'];
  protected $hidden = ['password','remember_token'];
  protected $table = 'admins';

  public function posts() : HasMany{
    return $this->hasMany(Post::class);
  }

  public function handleRequests() : HasMany{
    return $this->hasMany(CarRequest::class,'admin_id');
  }
}
