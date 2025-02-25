<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->nullable();
            $table->text("address")->nullable();
            $table->string("phone")->nullable();
            $table->string("operating_hours_weekday")->nullable();
            $table->string("operating_hours_weekend")->nullable();
            $table->string("operating_hours_ph")->nullable();
            $table->text("google_map")->nullable();
            $table->string("type")->nullable()->default("OFFICIAL");
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
        Schema::dropIfExists('stores');
    }
}
