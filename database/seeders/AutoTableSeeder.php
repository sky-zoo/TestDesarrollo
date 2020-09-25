<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Auto;

class AutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombreAutos = ["Etios", "Yaris", "Corolla",
                        "Prius", "Camry", "Toyota 86",
                        "Innova", "SW4", "RAV4",
                        "Land Cruiser Prado", "Land Cruiser 200", "Hilux"];

        $anioAutos = [2019,2020, 2018,2019,
                      2018,2019,2020,2019,
                      2019,2017,2018,2020];

        $precioAutos = [815900, 1038900,1430700,
                        2882000, 3753200,3812100,
                        2596400, 3236200, 3170200,
                        815900, 7873100, 1507000];
        
        $imgAuto = ["etios", "yaris","corolla",
                    "prius-1", "camry", "toyota-86",
                    "innova", "sw-4", "rav-4",
                    "prado", "cruiser", "hilux"];
        
        $tipoAuto = ["auto","auto","auto",
                     "auto", "auto","auto",
                     "SUV", "SUV", "SUV",
                     "SUV", "SUV", "pickup"];


        Auto::truncate();

        for ($i = 0; $i <= count($nombreAutos)-1; $i++) {
          DB::table('autos')->insert([	            
              'nombre_auto' => $nombreAutos[$i],
              'anio'=> $anioAutos[$i],
              'precio' => $precioAutos[$i],
              'img_auto'=> $imgAuto[$i],
              'tipo'=> $tipoAuto[$i]
          ]);
        }
    }
}
