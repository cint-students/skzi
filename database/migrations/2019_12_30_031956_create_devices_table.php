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
            $table->string('serial_number', 128)->primary();
            $table->string('manufacturer', 255);
            $table->string('model', 255);
            $table->string('formular', 255);
            $table->string('inventory_number', 255);
            $table->string('location', 255);
            $table->string('act_vvoda', 255);
            $table->string('comment', 255);
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('user_id');
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
