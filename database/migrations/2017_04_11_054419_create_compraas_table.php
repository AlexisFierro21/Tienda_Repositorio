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
            $table->increments('id_compra');
            $table->decimal('precio',5,2);
            $table->date('fecha');
            $table->integer('fk_libro')->unsigned();//Para generar las relaciones de las llaves foraneas
            $table->foreign('fk_libro')->references('id_libro')->on('librooos')->onDelete('cascade');
            $table->integer('fk_editorial')->unsigned();
            $table->foreign('fk_editorial')->references('id_editorial')->on('editoriaals')->onDelete('cascade');
            $table->integer('fk_usuario')->unsigned();
            $table->foreign('fk_usuario')->references('id')->on('usuarios')->onDelete('cascade');
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
