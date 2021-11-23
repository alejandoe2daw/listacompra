<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration{
    public function up(){
        Schema::create('productos', function (Blueprint $table) {
            $value=0.00;
            $table->id();
            $table->string('nombre');
            $table->float('precio',8,2)->default($value);
            $table->string('categoria',64);
            $table->string('imagen')->default(null);
            $table->boolean('pendiente')->default(false);
            $table->text('descipción')->default(null);
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
        Schema::dropIfExists('productos');
    }
}
