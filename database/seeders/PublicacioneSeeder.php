<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publicacione;
use App\Models\Emprendimiento;

class PublicacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1

        $publicacione = new Publicacione();

        $publicacione->descripcion ="Buenos días";
        $publicacione->imagen ="1659206846_pexels-quintin-gellar-313782.jpg";
        $publicacione->emprendimiento_id ="1";

        $publicacione->save();

        //2

        $publicacione2 = new Publicacione();

        $publicacione2->descripcion ="Buenas tardes";
        $publicacione2->imagen ="1659383709_pexels-stephan-seeber-1261728.jpg";
        $publicacione2->emprendimiento_id ="1";

        $publicacione2->save();

        //3

        $publicacione3 = new Publicacione();

        $publicacione3->descripcion ="Buenas noches";
        $publicacione3->imagen ="fondo5.jpg";
        $publicacione3->emprendimiento_id ="1";

        $publicacione3->save();

        //4

        $publicacione4 = new Publicacione();

        $publicacione4->descripcion ="Hasta mañana";
        $publicacione4->imagen ="pexels-francesco-ungaro-1525041.jpg";
        $publicacione4->emprendimiento_id ="2";

        $publicacione4->save();

        //5

        $publicacione5 = new Publicacione();

        $publicacione5->descripcion ="Hasta luego";
        $publicacione5->imagen ="pexels-irina-iriser-1379636.jpg";
        $publicacione5->emprendimiento_id ="2";

        $publicacione5->save();

        //6

        $publicacione6 = new Publicacione();

        $publicacione6->descripcion ="Hasta pronto";
        $publicacione6->imagen ="pexels-jarod-lovekamp-3791466.jpg";
        $publicacione6->emprendimiento_id ="3";

        $publicacione6->save();

        //7

        $publicacione7 = new Publicacione();

        $publicacione7->descripcion ="Adiós";
        $publicacione7->imagen ="pexels-vlad-alexandru-popa-1402787.jpg";
        $publicacione7->emprendimiento_id ="3";

        $publicacione7->save();

    }
        
}
