<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('id');
            $table->string('login')->index();
            $table->string('password');
            $table->string('fio')->default("")->index();
            $table->string('email')->default("");
            $table->float('deposit')->default(0)->index();
            $table->float('credit')->default(0)->index();
            $table->boolean('state')->default(0)->index();
            $table->boolean('hide')->default(0);
            $table->unsignedInteger('tarif_id')->nullable()->index();
            $table->unsignedInteger('policer_id')->nullable();
            $table->unsignedInteger('block_id')->nullable();
            $table->unsignedInteger('contract_id')->nullable();
            $table->datetime('activate_date')->nullable()->index();
            $table->datetime('expired_date')->nullable()->index();
            $table->text('description')->default("");
            $table->string('ip',20)->nullable()->index();
            $table->boolean('is_active')->default(0);
            $table->bigInteger('bytes_in')->nullable()->index();
            $table->bigInteger('bytes_out')->nullable()->index();
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
        Schema::dropIfExists('clients');
    }
}
