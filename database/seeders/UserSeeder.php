<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                
                'ci' => '11397851',
                'nombre' => 'Valeria',
                'apellidoP' => 'Coronado',
                'apellidoM' => 'Arispe',
                'direccion' => '7mo anillo Av. Moscu',
                'fNacimiento' => Carbon::parse('2000-05-06'),
                'sexo' => 'F',
                'email'=> 'vc6337617@gmail.com',
                'password' => Hash::make('123'),
                'tipo' =>'1'
            ],
            [
                
                'ci' => '11397851',
                'nombre' => 'Valeria',
                'apellidoP' => 'Coronado',
                'apellidoM' => 'Arispe',
                'direccion' => '7mo anillo Av. Moscu',
                'fNacimiento' => Carbon::parse('2000-05-06'),
                'sexo' => 'F',
                'email'=> 'vc6337617@gmail.com',
                'password' => Hash::make('123'),
                'tipo' =>'1'
            ]
        ]);
    }
}
