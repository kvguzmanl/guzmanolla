<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name'=> 'Edgar Alonso Olla',
                'email'=> 'alonso.olla@gmail.com',
                'email_verified_at'=> null,
                'password'=>Hash::make('123456'),
                'remember_token'=>'',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'=> 2,
                'name'=> 'Kelvin Vladimir Guzman',
                'email'=> 'kvguzmanla@gmail.com',
                'email_verified_at'=> null,
                'password'=>Hash::make('123456'),
                'remember_token'=>'',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'=> 3,
                'name'=> 'Geovanny Tzec',
                'email'=> 'gtzec@gmail.com',
                'email_verified_at'=> null,
                'password'=>Hash::make('123456'),
                'remember_token'=>'',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'=> 4,
                'name'=> 'Rodrigo Edgardo Villalta',
                'email'=> 'redgargo@gmail.com',
                'email_verified_at'=> null,
                'password'=>Hash::make('123456'),
                'remember_token'=>'',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'=> 5,
                'name'=> 'Mauricio Molina',
                'email'=> 'mymolina@gmail.com',
                'email_verified_at'=> null,
                'password'=>Hash::make('123456'),
                'remember_token'=>'',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        foreach($data as $value){
            DB::table('users')->insert($value);
        }
    }
}
