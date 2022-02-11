<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConjuntoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("conjuntos")->insert([
            ["nombre"=>"Fraternidad Artística y Cultural La Diablada","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Morenada Central Oruro","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Morenada Zona Norte","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Morenada Central Oruro","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Gran Tradicional Auténtica Diablada Oruro","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Tradicional Folclórico Diablada Oruro","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Diablada Artística Urus","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Diablada Ferroviaria","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Tradicional Tobas de la Zona Central","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Tradicional Llamerada Zona Norte","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Reyes Morenos COMIBOL","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Morenada Mejillones del litoral","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Morenada Metalúrgica ENAF","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Universitario Suri UTO","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Zampoñeros Kory Majthas","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Centro Tradicional Folclórico Cultural Negritos hijos del Pagador","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Caporales Infantil del colegio Ignacio León","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Caporales Centralistas","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Zampoñeros orkapata Hijos del Pagador","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Incas Hijos del Sol","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Khantus Sartañani","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Tarqueada Jatun Jallp'a","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Artístico Tobas Uru Uru","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Gran Conjunto Tradicional Tobas Zona Sud","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico y Cultural Phujllay de Oruro","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Tinkus Huajchas Oruro","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Folclórica Cullaguada Oruro","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Centro Cultural Rikjchary Llajta","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Incas","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Grupo de Danza Estilizada moderna Suri Sicuri","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Negritos Unidos de la Saya","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Llamerada Socavón","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Ahuatiris","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Cullaguada Terribles Quirquinchos","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Antawara","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Sambos Caporales","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Caporales Reyes de la Tuntuna ENAF","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Incas Collasuyo Hijos del Socavón","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Reyes morenos Ferrari Ghezzi","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Folklórica y Cultural Caporales Universitarios de San Simón","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Autóctonos Wititis del Colca","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Kallawayas Bolivia","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Tinkus los Jairas de Oruro","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Tinkus los Tolkas","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Doctorcitos Hitos","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Tinkus Huajchas","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Potolos Chayanta Jhilancos","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad de Danza Estilizada Moderna Inti Llajta","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Caporales CBN","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Caporales Modernos San José","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Diablada Artística Bolívar","imagen"=>'baseball-marker.png',"lat"=>0,"lng"=>0],
        ]);
    }
}
