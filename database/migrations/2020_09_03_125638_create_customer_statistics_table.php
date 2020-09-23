<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_statistics', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('customer_id')->index();
            $table->unsignedInteger('tariff_id');
            $table->unsignedBigInteger('bytes_in');
            $table->unsignedBigInteger('bytes_out');
            $table->datetime('start_time')->index();
            $table->datetime('end_time')->index();
            $table->integer('duration');
            $table->string('ip',20)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_statistics');
    }
}
