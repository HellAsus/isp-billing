<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('customer_id')->index();
            $table->smallInteger('lens');
            $table->smallInteger('increments');
            $table->boolean('state')->default(false);
            $table->text('description')->default("");
            $table->dateTime('unblock');
            $table->dateTime('date')->NOW();
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