<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo_transactions extends Model
{
    use HasFactory;

    public $primaryKey='id_potra';
    protected $table='promo_transaction';
    protected $fillable=[''];
}
