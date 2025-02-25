<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeoTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string("type")->nullable();
            $table->string("location")->nullable();
            $table->integer("reff_id")->nullable();
            $table->text("title")->nullable();
            $table->text("keyword")->nullable();
            $table->text("description")->nullable();
            $table->longtext("script")->nullable();
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
        Schema::dropIfExists('seo_tags');
    }
}
