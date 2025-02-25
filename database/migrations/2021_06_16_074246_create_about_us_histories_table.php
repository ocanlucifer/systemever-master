<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUsHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->text("image")->nullable();
            $table->string("year")->nullable();
            $table->string("month")->nullable();
            $table->longtext("body")->nullable();
            $table->text("lang")->nullable();
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
        Schema::dropIfExists('about_us_histories');
    }
}
