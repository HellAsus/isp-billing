<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('customer_id')->index();
            $table->foreignId('user_id')->index();
            $table->float('deposit')->default(0);
            $table->float('credit')->default(0);
            $table->float('prev_deposit')->default(0);
            $table->float('prev_credit')->default(0);
            $table->text('description')->default("");
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
        Schema::dropIfExists('invoices');
    }
}
