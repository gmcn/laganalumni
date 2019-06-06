<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yearbooks extends Model
{
    protected $fillable = [
      'year', 'link', 'updated_at', 'created_at'
    ];
}
