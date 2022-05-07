<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id'=> 1,
                'nombre'=> 'Leche de soya',
                'descripcion'=> '450 ml, en botella',
                'precio_unitario'=> 0.50,
                'existencia'=> 5,
                'garantia'=> 'Si',
                'id_vendedor'=> 1
            ],
            [
                'id'=> 2,
                'nombre'=> 'Aceite de oliva',
                'descripcion'=> '750 ml, en botella de plastico',
                'precio_unitario'=> 3.50,
                'existencia'=> 10,
                'garantia'=> 'Si',
                'id_vendedor'=> 2
            ],
            [
                'id'=> 3,
                'nombre'=> 'Arroz San Francisco',
                'descripcion'=> '4 Lbs',
                'precio_unitario'=> 5.50,
                'existencia'=> 15,
                'garantia'=> 'Si',
                'id_vendedor'=> 2
            ],
            [
                'id'=> 4,
                'nombre'=> 'Café',
                'descripcion'=> '1 Lb',
                'precio_unitario'=> 1.50,
                'existencia'=> 20,
                'garantia'=> 'Si',
                'id_vendedor'=> 3
            ],
            [
                'id'=> 5,
                'nombre'=> 'Pañales',
                'descripcion'=> 'Paquete de 5 Unidades',
                'precio_unitario'=> 2.70,
                'existencia'=> 10,
                'garantia'=> 'Si',
                'id_vendedor'=> 2
            ]
        ];

        foreach($data as $value){
            DB::table('products')->insert($value);
        }
    }
}
