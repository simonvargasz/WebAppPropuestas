<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profesores')->insert([
            ['rut' => '21152225-9','nombre' => 'Carlos','apellido' => 'Alten',"created_at" => Carbon::now()],
            ['rut' => '21152226-7','nombre' => 'Dagoberto','apellido' => 'Cabrera',"created_at" => Carbon::now()]
        ]);
    }
}
