<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemoRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demo_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('language', 10)->nullable();
            $table->string('source_url')->nullable();
            $table->string('heard_about')->nullable();
            $table->string('company_name')->nullable();
            $table->string('industry')->nullable();
            $table->string('annual_sales_range')->nullable();
            $table->string('employee_size_range')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('department')->nullable();
            $table->string('job_title')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('company_location')->nullable();
            $table->string('company_website')->nullable();
            $table->text('solutions_of_interest')->nullable();
            $table->text('current_systems_in_use')->nullable();
            $table->string('implementation_timeline')->nullable();
            $table->string('expected_user_count_range')->nullable();
            $table->text('additional_details')->nullable();
            $table->boolean('has_personal_data_consent')->default(false);
            $table->string('consent_text_version', 50)->nullable();
            $table->string('status', 30)->default('new');
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
        Schema::dropIfExists('demo_requests');
    }
}
