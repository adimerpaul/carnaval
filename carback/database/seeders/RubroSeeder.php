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
            ["nombre"=>"Salud","descripcion"=>"Hospitales y centro de salud","icono"=>"o_medical_services","url"=>"/rubro/1"],
            ["nombre"=>"Policia","descripcion"=>"Retenes Policiales","icono"=>"o_local_police","url"=>"/rubro/2"],
            
            ["nombre"=>"Farmacia","descripcion"=>"Baños cerca a la ruta del carnaval","icono"=>"o_shopping_cart","url"=>"/rubro/3"],
            ["nombre"=>"Baños","descripcion"=>"Baños cerca a la ruta del carnaval","icono"=>"o_shopping_cart","url"=>"/rubro/3"],
            ["nombre"=>"Cajeros de banco","descripcion"=>"Baños cerca a la ruta del carnaval","icono"=>"o_shopping_cart","url"=>"/rubro/3"],
            ["nombre"=>"Parqueo","descripcion"=>"Baños cerca a la ruta del carnaval","icono"=>"o_shopping_cart","url"=>"/rubro/3"],
            ["nombre"=>"Hoteleria","descripcion"=>"Hoteles disponibles","icono"=>"o_shopping_cart","url"=>"/rubro/3"],
            ["nombre"=>"Supermercados","descripcion"=>"Compra en tiendas","icono"=>"o_shopping_cart","url"=>"/rubro/3"],
            ["nombre"=>"Gastronomia","descripcion"=>"","icono"=>"o_home","url"=>"/rubro/4"],
            ["nombre"=>"Turismo","descripcion"=>"","icono"=>"o_home","url"=>"/rubro/4"],
            ["nombre"=>"RadioTaxi","descripcion"=>"","icono"=>"o_home","url"=>"/rubro/4"],
            ["nombre"=>"Entretenimiento","descripcion"=>"","icono"=>"o_home","url"=>"/rubro/4"],
            
        ]);
    }
}
