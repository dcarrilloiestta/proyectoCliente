<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBucliente2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bucliente2s', function (Blueprint $table) {
            $table->id();//autoincremental
            $table->string('nombre');
            $table->string('email');
            $table->timestamps();//marcadores de tiempo            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bucliente2s');
    }
}
