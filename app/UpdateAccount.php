<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpdateAccount extends Model
{
    protected $fillable = [
      'firstname', 'surname', 'email', 'address', 'phone', 'password', 'facebook', 'twitter', 'linkedin', 'active', 'newsletter'
    ];
}
