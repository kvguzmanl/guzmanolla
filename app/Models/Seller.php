<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'dui',
        'direccion',
        'nit',
        'id_usuario'
    ];

    public function Product(){
        return $this->hasMany(Product::class, '');
    }

    public function User(){
        return $this->belongsTo(User::class, 'id_usuario');
    }
}

