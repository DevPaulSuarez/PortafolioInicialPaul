<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyExperienciaLaboralTable extends Migration
{
    public function up()
    {
        Schema::table('experiencia_laboral', function (Blueprint $table) {
            // Agregar la columna 'proyecto_id'
            $table->unsignedBigInteger('proyecto_id')->nullable();
    
            // Eliminar la columna 'proyecto'
            $table->dropColumn('proyecto');
            
            // Agregar la clave foránea
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('experiencia_laboral', function (Blueprint $table) {
            // Eliminar la columna 'proyecto_id'
            $table->dropColumn('proyecto_id');
    
            // Volver a agregar la columna 'proyecto'
            $table->string('proyecto')->nullable();
        });
    }
}
