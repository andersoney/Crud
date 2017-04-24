<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('artigos', function (Blueprint $table) {
            //'Titulo','autor','area','Resultados','palavrachave','tipo','eficiencia','url','ltg','lng'
            $table->increments('id');
            $table->string('Titulo',150);
            $table->string('autor',100);
            $table->string('Area');
            $table->string('resultado');
            $table->string('eficiencia');
            $table->integer('tipo');
            $table->double('ltg');
            $table->double('lng');
            $table->string('url');
            $table->string('palavrachave',150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artigos');
    }
}
