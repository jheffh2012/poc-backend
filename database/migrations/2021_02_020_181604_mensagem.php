<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mensagem extends Migration{
    
    public function up(){
        Schema::create('mensagem', function (Blueprint $table) {
            $table->id();
            $table->string("texto", 255);
            $table->string("fila", 100);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('mensagem');
    }
}