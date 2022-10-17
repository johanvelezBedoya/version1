<?php

namespace Database\Seeders;

use App\Models\Buzon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $buzon = new Buzon();

        $buzon->reading ="true";
        $buzon->tiponotificacione_id = "1";
        $buzon->user_id ="5";

        $buzon->save();

        //
    }
        
}
