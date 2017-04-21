<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubioosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subioos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_editorial')->unsigned();
            $table->foreign('fk_editorial')->references('id_editorial')->on('editoriaals')->onDelete('cascade');
            $table->integer('fk_libro')->unsigned();
            $table->foreign('fk_libro')->references('id_libro')->on('librooos')->onDelete('cascade');
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
        Schema::dropIfExists('subioos');
    }
}
