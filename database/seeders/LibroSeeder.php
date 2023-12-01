<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $datos =[

            [
                'ISBN' => '11111',
                'nombre' => 'Belleza de la naturaleza',
                'descripcion' => 'Libro que muestra lo bello de nuestro planeta',
                'generoLiterario' => 'ensayo',
                'precioUnitario' => '50.000',
                'observacion' => 'Libro de la primer area',
                'foto' => 'cienciasnaturales.jpg',
                'area' => '1',
            ],

            [
                'ISBN' => '22222',
                'nombre' => 'Leyes de la carta magna',
                'descripcion' => 'Libro que enseña la practica y aplicacion de las leyes colombianas',
                'generoLiterario' => 'ensayo',
                'precioUnitario' => '50.000',
                'observacion' => 'Libro de la segunda area',
                'foto' => 'cienciashumanas.jpg',
                'area' => '2',
            ],

            [
                'ISBN' => '33333',
                'nombre' => 'Grandes obras del mundo conocido',
                'descripcion' => 'Libro que enseña algunas de las obras mas importantes que existen',
                'generoLiterario' => 'ensayo',
                'precioUnitario' => '50.000',
                'observacion' => 'Libro de la tercera area',
                'foto' => 'artes.jpg',
                'area' => '3',
            ],

            [
                'ISBN' => '44444',
                'nombre' => 'Histologia esencial',
                'descripcion' => 'Libro que enseña los tejidos del cuerpo',
                'generoLiterario' => 'ensayo',
                'precioUnitario' => '50.000',
                'observacion' => 'Libro de la cuarta area',
                'foto' => 'Literatura.jpg',
                'area' => '4',
            ],

            [
                'ISBN' => '55555',
                'nombre' => 'El quijote de la mancha',
                'descripcion' => 'Novela de Miguel de Cervantes',
                'generoLiterario' => 'ensayo',
                'precioUnitario' => '50.000',
                'observacion' => 'Libro de la quinta area',
                'foto' => 'literatura.jpg',
                'area' => '5',
            ],

            [
                'ISBN' => '66666',
                'nombre' => 'Gastronomica colombiana',
                'descripcion' => 'Libro que enseña la gastronomia y preparacion de los platos tipicos colombiamos',
                'generoLiterario' => 'ensayo',
                'precioUnitario' => '50.000',
                'observacion' => 'Libro de la sexta area',
                'foto' => 'gastronomia.jpg',
                'area' => '2',
            ],
        ];
        DB::table('libro')->insert($datos);
    }
}
