<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    protected $fillable = ['transactionID','trazabilityCode','sessionID','estado','confirmed'];
}
