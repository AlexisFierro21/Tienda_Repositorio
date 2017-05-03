<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrooosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librooos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',255);
            $table->string('autor',255);
            $table->string('image',255);
            $table->string('genero',255);
            $table->decimal('precio',5,2);
            $table->text('reseña');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('librooos');
    }
}
