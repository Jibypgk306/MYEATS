<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddrestaurentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addrestaurents', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('addcity_id')->constrained('addcities');
            $table->foreignId('addzone_id')->constrained('addzones');
            $table->foreignId('addcuisine_id')->constrained('addcuisines');

            $table->string('name');
            $table->string('about');
            $table->string('adress');
           
            $table->string('location');
            $table->text('logo')->nullable();
            $table->text('banner')->nullable();
            $table->text('minvalue');
            $table->string('cost');
            $table->string('time');
            $table->boolean('is_open')->default(false);
            $table->boolean('pickup')->default(false);
            $table->boolean('open')->default(true);
            $table->string('billing');
            $table->string('mobile');
            $table->string('status')->default('Active');
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
        Schema::dropIfExists('addrestaurents');
    }
}
