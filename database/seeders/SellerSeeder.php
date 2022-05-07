<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellerSeeder extends Seeder
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
                'dui'=> '00000000-1',
                'direccion'=> 'Mejicanos, San Salvador',
                'nit'=> '0000-000000-000-0',
                'id_usuario'=>1
            ],
            [
                'id'=> 2,
                'dui'=> '00000000-2',
                'direccion'=> 'Soyapango, San Salvador',
                'nit'=> '0000-000000-000-1',
                'id_usuario'=>2
            ],
            [
                'id'=> 3,
                'dui'=> '00000000-3',
                'direccion'=> 'San Martin, San Salvador',
                'nit'=> '0000-000000-000-3',
                'id_usuario'=>3
            ],
            [
                'id'=> 4,
                'dui'=> '00000000-4',
                'direccion'=> 'Ayutuxtepeque, San Salvador',
                'nit'=> '0000-000000-000-4',
                'id_usuario'=>4
            ],
            [
                'id'=> 5,
                'dui'=> '00000000-5',
                'direccion'=> 'San Salvador, San Salvador',
                'nit'=> '0000-000000-000-5',
                'id_usuario'=>5
            ]
        ];

        foreach($data as $value){
            DB::table('sellers')->insert($value);
        }
    }
}
