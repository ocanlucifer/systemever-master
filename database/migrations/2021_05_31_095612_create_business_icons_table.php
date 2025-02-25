<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessIconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_icons', function (Blueprint $table) {
            $table->increments('id');
            $table->text("main_image")->nullable();
            $table->text("secondary_image")->nullable();
            $table->text("description")->nullable();
            $table->string("type")->nullable();
            $table->string("location")->nullable();
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
        Schema::dropIfExists('business_icons');
    }
}
