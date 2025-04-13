<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTituloDescripcionToProyectosTable extends Migration
{
    public function up()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->string('nombre_en')->nullable();
            $table->text('descripcion_en')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropColumn(['nombre_en', 'descripcion_en']);
        });
    }
    
}
