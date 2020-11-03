<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_blocks', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('customer_id')->index();
            $table->smallInteger('lens');
            $table->smallInteger('increments');
            $table->text('description')->default("");
            $table->dateTime('unblock_date');
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
        Schema::dropIfExists('customer_blocks');
    }
}
