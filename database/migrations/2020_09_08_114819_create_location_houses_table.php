<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_houses', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('location_house_types_id');
            $table->unsignedInteger('location_streets_id');
            $table->unsignedInteger('location_districts_id');
            $table->string('name');
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
        Schema::dropIfExists('location_houses');
    }
}
