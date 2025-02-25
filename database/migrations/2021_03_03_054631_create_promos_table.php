<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->increments('id');
            $table->text("featured_image")->nullable();
            $table->string("title")->nullable();
            $table->text("description")->nullable();
            $table->date("period_start")->nullable();
            $table->date("period_end")->nullable();
            $table->integer("minimum_transaction")->nullable();
            $table->string("url")->nullable();
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
        Schema::dropIfExists('promos');
    }
}
