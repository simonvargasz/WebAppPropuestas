<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up(): void
    {
        Schema::create('estudiantes', function (Blueprint $table) {
			$table->string('rut',10)->primary();
			$table->string('nombre',20);
			$table->string('apellido',20);
			$table->string('email',50);



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     *
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
}
