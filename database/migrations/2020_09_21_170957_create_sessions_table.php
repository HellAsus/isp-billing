<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('customer_id')->index();
            $table->ipAddress('nas_ip');
            $table->ipAddress('customer_ip');
            $table->macAddress('customer_hw');
            $table->unsignedBigInteger('bytes_in');
            $table->unsignedBigInteger('bytes_out');
            $table->unsignedBigInteger('expired_date');
            $table->unsignedBigInteger('session_time');
            $table->dateTime('session_start');
            $table->unsignedBigInteger('alive');
            $table->boolean('drop_session')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
