<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string("featured_image")->nullable();
            $table->string("title")->nullable();
            $table->string("type")->nullable();
            $table->integer("price")->nullable();
            $table->text("description")->nullable();
            $table->string("varian")->nullable();
            $table->text("shopee_url")->nullable();
            $table->text("tokopedia_url")->nullable();
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
        Schema::dropIfExists('products');
    }
}
