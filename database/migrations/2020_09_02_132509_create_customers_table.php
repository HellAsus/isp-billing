<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('id');
            $table->string('username')->index();
            $table->string('password');
            $table->string('last_name')->default("")->index();
            $table->string('first_name')->default("");
            $table->string('patronymic')->default("");
            $table->string('email')->default("");
            $table->float('deposit')->default(0)->index();
            $table->float('credit')->default(0)->index();
            $table->boolean('state')->default(0)->index();
            $table->boolean('hide')->default(0);
            $table->foreignId('tariff_id')->nullable()->index();
            $table->foreignId('shaper_id')->nullable();
            $table->foreignId('customer_blocks_id')->nullable();
            $table->foreignId('contract_id')->nullable();
            $table->datetime('activate_date')->nullable()->index();
            $table->datetime('expired_date')->nullable()->index();
            $table->text('description')->default("");
            $table->ipAddress('ip')->nullable()->index();
            $table->boolean('is_active')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('customers');
    }
}
