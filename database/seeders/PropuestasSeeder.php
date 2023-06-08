<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PropuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('propuestas')->insert([
            ['id' => 1, 'fecha' => '2023-10-25', 'documento' => 'https://www.google.cl','estado' => 0,'estudiante_rut' => '21152225-9',"created_at" => Carbon::now()],
            ['id' => 2, 'fecha' => '2023-10-25', 'documento' => 'https://www.google.cl','estado' => 1,'estudiante_rut' => '21152226-7',"created_at" => Carbon::now()],
            ['id' => 3, 'fecha' => '2023-10-25', 'documento' => 'https://www.google.cl','estado' => 2,'estudiante_rut' => '21152225-9',"created_at" => Carbon::now()],
            ['id' => 4, 'fecha' => '2023-10-25', 'documento' => 'https://www.google.cl','estado' => 3,'estudiante_rut' => '21152226-7',"created_at" => Carbon::now()],
        ]);
    }
}
