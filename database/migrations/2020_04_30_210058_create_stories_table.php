<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title', 128)->nullable();
            $table->enum('categoria', ['Fantasia', 'Accion', 'Drama', 'Romance', 'Sexual', 'General']);
          
            $table->string('imagen');
            $table->text('body')->nullable();
            $table->enum('status', ['publicando', 'finalizado']);
           
        
        
            
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
        Schema::dropIfExists('stories');
    }
}
