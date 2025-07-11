<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCEOForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ceo_forums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->date('post_date')->nullable();
            $table->text('image_url')->nullable();
            $table->string('slider_title')->nullable();
            $table->text('video_link')->nullable();
            $table->text('presenter')->nullable();
            $table->longText('body')->nullable();
            $table->string('lang')->nullable();
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
        Schema::dropIfExists('ceo_forums');
    }
}
