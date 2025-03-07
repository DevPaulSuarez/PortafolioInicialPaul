<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciaTecnologiaTable extends Migration
{
    public function up(): void
    {
        Schema::create('experiencia_tecnologia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('experiencia_id')->constrained('experiencia_laboral')->onDelete('cascade');
            $table->foreignId('tecnologia_id')->constrained('tecnologia')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experiencia_tecnologia');
    }
}
