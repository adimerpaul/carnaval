<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuntoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("puntos")->insert([
            [
                "nombre"=>"HOTEL PLAZA",
                "imagen"=>"baseball-marker.png",
                "descripcion"=>"Flores Plaza Hotel es un hotel 3 estrellas en Oruro. Reserva en la web oficial de Flores Plaza Hotel.",
                "direccion"=>"2VJP+87J, Oruro",
                "telefono"=>" 2 5250023",
                "lat"=>"-17.969287",
                "lng"=>"-67.114600",
                "rubro_id"=>"1",
            ]
        ]);
    }
}
