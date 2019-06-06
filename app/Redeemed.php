<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redeemed extends Model
{
    protected $fillable = [
      'retailerName', 'accountID', 'voucherCode', 'turnout', 'turnout_colour', 'turnout_size', 'turnout_weight', 'proof_OfPurchase'
    ];
}
