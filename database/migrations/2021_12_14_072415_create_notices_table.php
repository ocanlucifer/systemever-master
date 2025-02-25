<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');
            $table->text("image")->nullable();
            $table->string("title")->nullable();
            $table->longtext("desc")->nullable();
            $table->integer("views")->nullable();
            $table->string("author")->nullable()->default("Systemever");
            $table->date("date_start")->nullable();
            $table->date("date_end")->nullable();
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
        Schema::dropIfExists('notices');
    }
}
