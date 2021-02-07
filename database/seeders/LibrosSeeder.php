<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libro = [
            [
                'ISBN' => '00701',
                'titulo' => 'El Beso de Plata',
                'precio' => '70000',
                'editorial_fk' => 1

            ],

            [
                'ISBN' => '00702',
                'titulo' => 'Financial & Managerial Accounting',
                'precio' => '80000',
                'editorial_fk' => 2
            ],

            [
                'ISBN' => '00703',
                'titulo' => 'Internet De Las Cosas',
                'precio' => '60000',
                'editorial_fk' => 3
            ],

            [
                'ISBN' => '00704',
                'titulo' => 'El Juego Del Saber',
                'precio' => '50000',
                'editorial_fk' => 4
            ],

            [
                'ISBN' => '00705',
                'titulo' => 'Rebeldes',
                'precio' => '99000',
                'editorial_fk' => 5
            ]
        ];
        DB::table('libro')->insert($libro);
    }
}