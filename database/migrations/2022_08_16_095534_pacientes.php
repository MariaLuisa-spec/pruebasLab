<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Identificacion')->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('edad');
            $table->string('genero');  //desplegable          
            $table->string('EPS');     //desplegable  
            $table->float('TP');
            $table->float('PTT');
            $table->float('III');
            $table->float('AT_III');
            $table->float('TT');           
            $table->float('Fibrinogeno');       
            $table->rememberToken();
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
        Schema::dropIfExists('pacientes');
    }
};
