<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTableCmsPrivilegesRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_privileges_roles', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('is_visible')->nullable();
            $table->integer('is_create')->nullable();
            $table->integer('is_read')->nullable();
            $table->integer('is_edit')->nullable();
            $table->integer('is_delete')->nullable();
            $table->integer('id_cms_privileges')->nullable();
            $table->integer('id_cms_moduls')->nullable();

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
        Schema::drop('cms_privileges_roles');
    }
}
