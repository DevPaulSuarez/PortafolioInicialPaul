<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUrlsInProyectosTable extends Migration
{

    public function up()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->string('url_live_demo')->nullable();
            $table->string('url_github')->nullable();
            $table->text('url_video_proyecto')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropColumn(['url_live_demo','url_github', 'url_video_proyecto']);
        });
    }
}
