<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id_article');
            // Antes de criar uma foreign, criar um integer
            $table->integer('fk_user')->unsigned();
            // Fazendo referencia a tabela usuario
            // Delete cascade para quando um usuario ser removido, remover a foreign
            $table->foreign('fk_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('titulo');
            $table->string('link');
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
        Schema::dropIfExists('articles');
    }
}
