<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoriasToTecnologiaTable extends Migration
{
    public function up()
    {
        Schema::table('tecnologia', function (Blueprint $table) {
            $table->enum('categorias', ['lenguaje', 'framework', 'herramientas', 'database'])
                ->default('lenguaje') // Opcional: Define un valor por defecto
                ->after('descripcion'); // Opcional: Define la posición del campo
        });
    }

    public function down()
    {
        Schema::table('tecnologia', function (Blueprint $table) {
            $table->dropColumn('categorias');
        });
    }
}
