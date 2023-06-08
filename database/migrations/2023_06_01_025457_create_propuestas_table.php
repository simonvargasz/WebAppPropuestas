<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePropuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     */
    public function up(): void
    {
        Schema::create('propuestas', function (Blueprint $table) {
			$table->integer('id')->autoIncrement();
			$table->date('fecha');
			$table->string('documento',100);
			$table->tinyinteger('estado')->default(0);

            $table->string('estudiante_rut',10);
			$table->foreign('estudiante_rut')->references('rut')->on('estudiantes');


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
        Schema::dropIfExists('propuestas');
    }
}
