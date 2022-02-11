<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("rubros")->insert([
            ["nombre"=>"Inicio","descripcion"=>"","icono"=>"home","url"=>"/"],
            ["nombre"=>"Holeteleria","descripcion"=>"","icono"=>"home","url"=>"/hoteleria"],
            ["nombre"=>"Gastronomia","descripcion"=>"","icono"=>"home","url"=>"/gastronomia"],
        ]);
    }
}
