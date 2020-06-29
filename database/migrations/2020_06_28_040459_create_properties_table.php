<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('agent');
            $table->string('category');
            $table->boolean('isSell')->nullable(true);
            $table->boolean('isRent')->nullable(true);
            $table->string('name');
            $table->integer('bath_room');
            $table->integer('bed_room');
            $table->integer('stories');
            $table->integer('land_area');
            $table->integer('building_area');
            $table->string('location')->default("");
            $table->text('address');
            $table->text('description');
            $table->string('image')->nullable(true);
            $table->string('main_image')->nullable(true);
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
        Schema::dropIfExists('properties');
    }
}
