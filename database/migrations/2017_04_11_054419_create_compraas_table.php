<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('compraas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('precio',5,2);
            $table->date('fecha');
            $table->integer('id_libro')->unsigned();//Para generar las relaciones de las llaves foraneas
            $table->foreign('id_libro')->references('id')->on('librooos')->onDelete('cascade');
            $table->integer('id_editorial')->unsigned();
            $table->foreign('id_editorial')->references('id')->on('editoriaals')->onDelete('cascade');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('compraas');
    }
}
