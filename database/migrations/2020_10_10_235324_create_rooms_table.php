<?php

use App\Enums\FaceWindow;
use App\Enums\FloorInfo;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('residence_id');
            $table->integer('floor');
            $table->integer('room_num');
            $table->integer('extent');
            $table->integer('rent');
            $table->integer('common_charge');
            $table->enum('floor_info', FloorInfo::getValues());
            $table->enum('face_window', FaceWindow::getValues());
            $table->boolean('room_info')->default(false);
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
        Schema::dropIfExists('rooms');
    }
}
