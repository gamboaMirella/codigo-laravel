<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeleteServiciosSeeder extends Seeder {
    public function run() {
        // Eliminar todos los registros en la tabla 'servicios'
        DB::table('servicios')->truncate();
    }
}

