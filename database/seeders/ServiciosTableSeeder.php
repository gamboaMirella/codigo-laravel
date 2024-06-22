<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosTableSeeder extends Seeder {
    public function run() {
        DB::table('servicios')->insert([
            ['titulo' => 'Mantenimiento', 'descripcion' => 'Servicio completo de mantenimiento'],
            ['titulo' => 'Afinamiento', 'descripcion' => 'Afinamiento del motor'],
            ['titulo' => 'Cambio de aceite', 'descripcion' => 'Cambio de aceite y filtros'],
            ['titulo' => 'Lavado tipo salón', 'descripcion' => 'Lavado completo del vehículo']
        ]);
    }
}
