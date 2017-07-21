<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedesPertModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redes_pert_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_rede');
            $table->string('descricao');
            $table->string('img_rede');
            $table->string('arquivo_rede');
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
        Schema::dropIfExists('redes_pert_models');
    }
}
