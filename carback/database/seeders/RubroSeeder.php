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
            ["nombre"=>"Inicio","descripcion"=>"Pagina de inicio","icono"=>"o_home","url"=>"/"],
            ["nombre"=>"Supermercados","descripcion"=>"Compra en tiendas","icono"=>"o_shopping_cart","url"=>"/rubro/1"],
            ["nombre"=>"Gastronomia","descripcion"=>"","icono"=>"home","url"=>"/rubro/2"],
        ]);
    }
}
