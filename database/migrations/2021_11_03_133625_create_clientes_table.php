<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', 
            function (Blueprint $table) {
                $table->id();//autoincremental
                $table->string('nombre');
                $table->string('slug');
                $table->string('email');
                $table->timestamps();//marcadores de tiempo
                $table->engine='InnoDB';
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
