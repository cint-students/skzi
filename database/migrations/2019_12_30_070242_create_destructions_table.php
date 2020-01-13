<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destructions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('destroyed_at')->nullable();
            $table->string('act_number', 255)->nullable();
            $table->string('letter_info', 255)->nullable();
            $table->string('device_serial_number', 128);
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
        Schema::dropIfExists('destructions');
    }
}
