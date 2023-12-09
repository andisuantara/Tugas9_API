<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $primaryKey = 'id_category';
    protected $fillable = [
        'name_category', 'desc_category'
    ];

    public function products() {
        return $this->hasMany(Products::class, 'id_category', 'id_category');
    }
}
