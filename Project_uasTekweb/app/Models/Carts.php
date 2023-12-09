<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $table = 'carts';
    public $primaryKey = 'id_cart';
    protected $fillable = [
        'id', 'id_product', 'quantity', 'date_added'
    ];

    public function Product() {
        return $this->belongsTo(Products::class, 'id_product', 'id_product');
    }
    public function User() {
        return $this->belongsTo(User::class, 'id', 'id');
    }

}
