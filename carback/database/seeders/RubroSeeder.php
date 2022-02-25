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
            ["nombre"=>"Ruta","descripcion"=>"En tiempo real","icono"=>"o_map","url"=>"/"],
            ["nombre"=>"Salud","descripcion"=>"Hospitales y centro de salud","icono"=>"o_medical_services","url"=>"/rubro/2"],
            ["nombre"=>"Policia","descripcion"=>"Retenes Policiales","icono"=>"o_local_police","url"=>"/rubro/3"],

            ["nombre"=>"Farmacia","descripcion"=>"Baños cerca a la ruta del carnaval","icono"=>"o_shopping_cart","url"=>"/rubro/4"],
            ["nombre"=>"Baños","descripcion"=>"Baños cerca a la ruta del carnaval","icono"=>"o_shopping_cart","url"=>"/rubro/5"],
            ["nombre"=>"Cajeros de banco","descripcion"=>"Baños cerca a la ruta del carnaval","icono"=>"o_shopping_cart","url"=>"/rubro/6"],
            ["nombre"=>"Parqueo","descripcion"=>"Baños cerca a la ruta del carnaval","icono"=>"o_shopping_cart","url"=>"/rubro/7"],
            ["nombre"=>"Hoteleria","descripcion"=>"Hoteles disponibles","icono"=>"o_shopping_cart","url"=>"/rubro/8"],
            ["nombre"=>"Supermercados","descripcion"=>"Compra en tiendas","icono"=>"o_shopping_cart","url"=>"/rubro/9"],
            ["nombre"=>"Gastronomia","descripcion"=>"","icono"=>"o_home","url"=>"/rubro/10"],
            ["nombre"=>"Turismo","descripcion"=>"","icono"=>"o_home","url"=>"/rubro/11"],
            ["nombre"=>"RadioTaxi","descripcion"=>"","icono"=>"o_home","url"=>"/rubro/12"],
            ["nombre"=>"Entretenimiento","descripcion"=>"","icono"=>"o_home","url"=>"/rubro/13"],

        ]);
    }
}
