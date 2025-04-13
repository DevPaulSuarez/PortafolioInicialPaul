<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmpresaCargoDescripcioInglesToExperienciaLaboralTable extends Migration
{
    public function up()
    {
        Schema::table('experiencia_laboral', function (Blueprint $table) {
            $table->string('empresa_en')->nullable();
            $table->string('cargo_en')->nullable();
            $table->text('descripcion_en')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('experiencia_laboral', function (Blueprint $table) {
            $table->dropColumn(['empresa_en','cargo_en', 'descripcion_en']);
        });
    }
}
