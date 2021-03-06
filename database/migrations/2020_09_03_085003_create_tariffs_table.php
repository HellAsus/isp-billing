<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariffs', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->float('price');
            $table->unsignedInteger('expired_lens')->default(30);
            $table->foreignId('shaper_id')->nullable();
            $table->foreignId('ip_pool_id')->nullable();
            $table->text('description')->default("");
            $table->boolean('is_default')->nullable()->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariffs');
    }
}
