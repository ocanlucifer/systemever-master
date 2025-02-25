<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title")->nullable();
            $table->text("image_url")->nullable();
            $table->text("video_url")->nullable();
            $table->text("redirect_url")->nullable();
            $table->string("is_shown_on_home_page")->nullable();
            $table->string("updated_by")->nullable();
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
        Schema::dropIfExists('banner');
    }
}
