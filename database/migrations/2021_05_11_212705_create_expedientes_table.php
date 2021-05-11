<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->integer('id_expediente')->unique()->nullable();
            $table->string('descripcion');
            $table->string('archivo', 255);
            $table->date('fecha_inicio');
            $table->date('fecha_vencimiento');
            $table->timestamps();
            $table->primary(['id_expediente']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expedientes');
    }
}
