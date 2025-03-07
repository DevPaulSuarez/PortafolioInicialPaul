<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id'); // Agrega la columna después de `id`
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Clave foránea
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Eliminar la clave foránea
            $table->dropColumn('user_id'); // Eliminar la columna
        });
    }
}
