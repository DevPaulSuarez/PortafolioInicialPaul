<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->boolean('publicar_externo')
                  ->default(false)
                  ->after('descripcion'); // cambia 'url' por el campo después del cual quieres ubicarlo

            $table->enum('tipo_proyecto', [
                'small_business',
                'non_profit',
                'corporate_website',
                'ecommerce',
                'landing_page',
                'full_system'
            ])->nullable()->after('publicar_externo');
        });
    }

    public function down(): void
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropColumn(['publicar_externo', 'tipo_proyecto']);
        });
    }
};