<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePainPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pain_points', function (Blueprint $table) {
            $table->increments('id');
            $table->string("lang")->nullable();
            $table->string("location")->nullable();
            $table->string("media")->nullable();
            $table->string("text")->nullable();
            $table->string("youtube")->nullable();
            $table->string("type")->nullable();
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
        Schema::dropIfExists('pain_points');
    }
}
