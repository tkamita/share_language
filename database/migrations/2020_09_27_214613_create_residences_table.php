<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('introduction');
            $table->string('location');
            $table->integer('minimum_rent');
            $table->integer('maximum_rent');
            $table->integer('common_charge');
            $table->integer('term');
            $table->integer('room_num');
            $table->boolean('wifi')->default(false);
            $table->boolean('bicycle')->default(false);
            $table->boolean('parking')->default(false);
            $table->boolean('motorcycle')->default(false);
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
        Schema::dropIfExists('residences');
    }
}
