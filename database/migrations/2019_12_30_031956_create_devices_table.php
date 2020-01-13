<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial_number', 128);
            $table->string('manufacturer', 255)->nullable();
            $table->string('model', 255)->nullable();
            $table->string('formular', 255)->nullable();
            $table->string('inventory_number', 255)->nullable();
            $table->string('location', 255)->nullable();
            $table->string('act_vvoda', 255)->nullable();
            $table->string('comment', 255)->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
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
        Schema::dropIfExists('devices');
    }
}
