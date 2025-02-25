<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertHomepageComingSoon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // \DB::statement("INSERT INTO `settings` (`id`, `key`, `value`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `setting_type`) VALUES (NULL, 'HOME_COMMING_SOON_IMAGE', 'assets/img/group-2@2x.png', NULL, '2020-12-18 04:23:36', '2021-01-20 07:35:40', NULL, 'image')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
