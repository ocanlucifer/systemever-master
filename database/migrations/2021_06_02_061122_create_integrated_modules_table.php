<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegratedModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrated_modules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("products_id")->nullable();
            $table->text("icon")->nullable();
            $table->string("title")->nullable();
            $table->longtext("feature")->nullable();
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
        Schema::dropIfExists('integrated_modules');
    }
}
