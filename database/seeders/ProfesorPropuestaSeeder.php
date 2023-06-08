<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfesorPropuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profesor_propuesta')->insert([
            ['propuesta_id' => 1,'profesor_rut' => '21152225-9','fecha' => '2024-01-25','hora' => '10:00:00','comentario' => 'Muy bonito, no me gusto',"created_at" => Carbon::now()]
        ]);
    }
}
