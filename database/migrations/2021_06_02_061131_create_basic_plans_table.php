<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     * 
     * icon text
     * description text
     * type (string) 
     */
    public function up()
    {
        Schema::create('basic_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("products_id")->nullable();
            $table->text("icon")->nullable();
            $table->longtext("description")->nullable();
            $table->string("type")->nullable();
            $table->string("lang")->nullable();
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
        Schema::dropIfExists('basic_plans');
    }
}
