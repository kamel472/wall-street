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
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->text('location');
            $table->integer('area');
            $table->integer('rooms');
            $table->integer('baths');
            $table->integer('price');
            $table->integer('downpayment');
            $table->integer('installments');
            $table->text('main_image')->nullable();
            $table->text('carousal_images')->nullable();
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
