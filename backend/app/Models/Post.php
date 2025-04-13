<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
  protected $fillable = ['admin_id','title','content'];

  public function admin():BelongsTo{
    return $this->belongsTo(Admin::class,'admin_id');
  }
}
