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
            $table->string('full_name')->default("")->index();
            $table->string('email')->default("");
            $table->float('deposit')->default(0)->index();
            $table->float('credit')->default(0)->index();
            $table->boolean('state')->default(0)->index();
            $table->boolean('hide')->default(0);
            $table->unsignedInteger('tariff_id')->nullable()->index();
            $table->unsignedInteger('shaper_id')->nullable();
            $table->unsignedInteger('block_id')->nullable();
            $table->unsignedInteger('contract_id')->nullable();
            $table->datetime('activate_date')->nullable()->index();
            $table->datetime('expired_date')->nullable()->index();
            $table->text('description')->default("");
            $table->string('ip',20)->nullable()->index();
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
