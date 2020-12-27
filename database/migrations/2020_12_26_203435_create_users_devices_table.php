<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_devices', function (Blueprint $table) {
            $table->id();
            $table->date('assigned_at');
            $table->date('returned_at');

            $table->foreignId('user_id')->constrained;
            $table->foreignId('device_id')->constrained;

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
        Schema::dropIfExists('users_devices');
    }
}
