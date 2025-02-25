<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {            
            $table->text('main_image')->nullable();
            $table->string('main_title')->nullable();
            $table->text('banner_image')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('banner_sub_title')->nullable();
            $table->string('featured_title')->nullable();
            $table->string('featured_sub_title')->nullable();
            $table->longtext('featured_sort_description')->nullable();
            $table->string('who_need_title')->nullable();
            $table->string('who_need_sub_title')->nullable();
            $table->integer('subscription_fee_monthly')->nullable();
            $table->integer('subscription_fee_annualy')->nullable();
            $table->integer('additional_user_fee')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('main_image');
            $table->dropColumn('main_title');
            $table->dropColumn('banner_image');
            $table->dropColumn('banner_title');
            $table->dropColumn('banner_sub_title');
            $table->dropColumn('featured_title');
            $table->dropColumn('featured_sub_title');
            $table->dropColumn('featured_sort_description');
            $table->dropColumn('who_need_title');
            $table->dropColumn('who_need_sub_title');
            $table->dropColumn('subscription_fee_monthly');
            $table->dropColumn('subscription_fee_annualy');
            $table->dropColumn('additional_user_fee');
        });
    }
}
