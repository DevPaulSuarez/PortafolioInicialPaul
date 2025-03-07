<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecnologiaTable extends Migration
{
    public function up()
    {
        Schema::create('tecnologia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique(); // Nombre de la tecnología
            $table->string('icono')->nullable(); // Ruta al icono
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });

        // Crear tabla pivote para la relación muchos a muchos
        Schema::create('proyecto_tecnologia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyecto_id')->constrained('proyectos')->onDelete('cascade');
            $table->foreignId('tecnologia_id')->constrained('tecnologia')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proyecto_tecnologia');
        Schema::dropIfExists('tecnologia');
    }
}
