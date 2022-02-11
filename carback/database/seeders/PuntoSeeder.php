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
                "nombre"=>"HOTAL PLAZA",
                "imagen"=>"hotel.jpg",
                "descripcion"=>"",
                "direccion"=>"calle bolivar",
                "telefono"=>"5278945",
                "lat"=>"-17.969287",
                "lng"=>"-67.114600",
                "rubro_id"=>"1",
            ]
        ]);
    }
}
