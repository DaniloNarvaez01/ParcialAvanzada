<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaConocimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos =[
            [
                'idArea' => '1',
                'descripcion' => 'Ciencias Naturales'
            ],

            [
                'idArea' => '2',
                'descripcion' => 'Ciencias Humanas, Sociales y jurídicas'
            ],

            [
                'idArea' => '3',
                'descripcion' => 'Artes'
            ],

            [
                'idArea' => '4',
                'descripcion' => 'Ciencias de la Salud'
            ],
            [
                'idArea' => '5',
                'descripcion' => 'Literatura'
            ],

            [
                'idArea' => '6',
                'descripcion' => 'Gastronomia y cocina'
            ],
        ];
        DB::table('areaconocimiento')->insert($datos);
    }
}
