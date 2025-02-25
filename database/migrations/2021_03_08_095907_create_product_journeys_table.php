<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductJourneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_journeys', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title")->nullable();
            $table->string("sub_title")->nullable();
            $table->text("featured_image")->nullable();
            $table->text("body")->nullable();
            $table->string("lang")->nullable()->default("ID");
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
        Schema::dropIfExists('product_journeys');
    }
}
