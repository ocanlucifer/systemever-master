<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DemoRequest extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'language',
        'source_url',
        'heard_about',
        'company_name',
        'industry',
        'annual_sales_range',
        'employee_size_range',
        'contact_name',
        'department',
        'job_title',
        'phone_number',
        'email',
        'company_location',
        'company_website',
        'solutions_of_interest',
        'current_systems_in_use',
        'implementation_timeline',
        'expected_user_count_range',
        'additional_details',
        'has_personal_data_consent',
        'consent_text_version',
        'status',
    ];
}
