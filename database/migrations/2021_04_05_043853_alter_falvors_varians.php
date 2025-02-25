<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterFalvorsVarians extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flavors_varians', function (Blueprint $table) {            
            $table->integer('product_en')->nullable()->default(0);
            $table->string('title_id')->nullable();
            $table->text('description_id')->nullable();
            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flavors_varians', function (Blueprint $table) {
            $table->dropColumn('product_en');
            $table->dropColumn('title_id');
            $table->dropColumn('description_id');
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
        });
    }
}
