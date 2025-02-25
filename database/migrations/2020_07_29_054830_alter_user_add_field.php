<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUserAddField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {            
            $table->text('authorities')->nullable();
            $table->text('image_url')->nullable();
            $table->date('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('fungsi_kerja')->nullable();
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('apple_id')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('parent_phone_number')->nullable();
            $table->string('is_all_classes_purchased')->nullable();
            $table->string('is_all_tryouts_purchased')->nullable();
            $table->integer('tryout_credit')->nullable();
            $table->string('user_credential')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('sub_district_id')->nullable();
            $table->integer('prioritized_major_id')->nullable();
            $table->string('lang_key')->nullable();
            $table->string('updated_by')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {           
            $table->dropColumn('authorities'); 
            $table->dropColumn('image_url'); 
            $table->dropColumn('google_id');
            $table->dropColumn('facebook_id');
            $table->dropColumn('apple_id');
            $table->dropColumn('parent_name');
            $table->dropColumn('parent_phone_number');
            $table->dropColumn('is_all_classes_purchased');
            $table->dropColumn('is_all_tryouts_purchased');
            $table->dropColumn('tryout_credit');
            $table->dropColumn('user_credential');
            $table->dropColumn('province_id');
            $table->dropColumn('city_id');
            $table->dropColumn('sub_district_id');
            $table->dropColumn('prioritized_major_id');
            $table->dropColumn('lang_key');
        });
    }
}
