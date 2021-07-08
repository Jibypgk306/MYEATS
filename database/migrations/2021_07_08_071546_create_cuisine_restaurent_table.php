<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuisineRestaurentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('cuisine_restaurent', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('cuisine_id');
             $table->unsignedBigInteger('restaurent_id');
  
             $table->foreign('cuisine_id')->references('id')->on('cuisines')->onDelete('cascade');
             $table->foreign('restaurent_id')->references('id')->on('restaurents')->onDelete('cascade');
             
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
         Schema::dropIfExists('addcuisine_restaurent');
     }
 }
 