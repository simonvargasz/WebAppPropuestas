<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estudiantes')->insert([
            ['rut' => '21152225-9','nombre' => 'Simon','apellido' => 'Vargas','email' => 'simon.vargas@usm.cl',"created_at" => Carbon::now()],
            ['rut' => '21152226-7','nombre' => 'Pepito','apellido' => 'Sugoma','email' => 'pepito.sugoma@usm.cl',"created_at" => Carbon::now()]
        ]);
    }
}
