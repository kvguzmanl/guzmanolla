<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'precio_unitario',
        'existencia',
        'garantia',
        'id_vendedor'
    ];

    public function Seller(){
        return $this->belongsTo(Seller::class);
    }
}
