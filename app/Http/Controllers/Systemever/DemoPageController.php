<?php

namespace App\Http\Controllers\Systemever;

use App\DemoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoPageController extends Controller
{
    public function index()
    {
        $data['breadcrumbs'] = [
            [
                'label' => 'Home',
                'link' => route('get.index'),
            ],
            [
                'label' => 'Demo',
                'link' => route('get.demo_page'),
            ],
        ];

        $data['article_seo_meta'] = null;

        return view('systemever/pages/demo_page', $data);
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'heard_about' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'annual_sales_range' => 'required|string|max:255',
            'employee_size_range' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company_location' => 'required|string|max:255',
            'company_website' => 'nullable|string|max:255',
            'solutions_of_interest' => 'required|array|min:1',
            'solutions_of_interest.*' => 'string|max:255',
            'current_systems_in_use' => 'required|array|min:1',
            'current_systems_in_use.*' => 'string|max:255',
            'implementation_timeline' => 'required|string|max:255',
            'expected_user_count_range' => 'required|string|max:255',
            'additional_details' => 'nullable|string',
            'has_personal_data_consent' => 'accepted',
            'language' => 'nullable|string|max:10',
            'source_url' => 'nullable|string|max:255',
        ]);

        $solutionsOfInterest = !empty($validated['solutions_of_interest'])
            ? implode(',', array_values($validated['solutions_of_interest']))
            : null;

        $currentSystemsInUse = !empty($validated['current_systems_in_use'])
            ? implode(',', array_values($validated['current_systems_in_use']))
            : null;

        $duplicateExists = DemoRequest::where('created_at', '>=', now()->subSeconds(10))
            ->where('language', $validated['language'] ?? activelang())
            ->where('source_url', $validated['source_url'] ?? $request->fullUrl())
            ->where('heard_about', $validated['heard_about'])
            ->where('company_name', $validated['company_name'])
            ->where('industry', $validated['industry'])
            ->where('annual_sales_range', $validated['annual_sales_range'] ?? null)
            ->where('employee_size_range', $validated['employee_size_range'] ?? null)
            ->where('contact_name', $validated['contact_name'])
            ->where('department', $validated['department'] ?? null)
            ->where('job_title', $validated['job_title'] ?? null)
            ->where('phone_number', $validated['phone_number'])
            ->where('email', $validated['email'])
            ->where('company_location', $validated['company_location'] ?? null)
            ->where('company_website', $validated['company_website'] ?? null)
            ->where('solutions_of_interest', $solutionsOfInterest)
            ->where('current_systems_in_use', $currentSystemsInUse)
            ->where('implementation_timeline', $validated['implementation_timeline'] ?? null)
            ->where('expected_user_count_range', $validated['expected_user_count_range'] ?? null)
            ->where('additional_details', $validated['additional_details'] ?? null)
            ->exists();

        if ($duplicateExists) {
            return redirect()->route('get.demo_page')->with('success', 'Your demo request has already been submitted.');
        }

        DemoRequest::create([
            'language' => $validated['language'] ?? activelang(),
            'source_url' => $validated['source_url'] ?? $request->fullUrl(),
            'heard_about' => $validated['heard_about'],
            'company_name' => $validated['company_name'],
            'industry' => $validated['industry'],
            'annual_sales_range' => $validated['annual_sales_range'] ?? null,
            'employee_size_range' => $validated['employee_size_range'] ?? null,
            'contact_name' => $validated['contact_name'],
            'department' => $validated['department'] ?? null,
            'job_title' => $validated['job_title'] ?? null,
            'phone_number' => $validated['phone_number'],
            'email' => $validated['email'],
            'company_location' => $validated['company_location'] ?? null,
            'company_website' => $validated['company_website'] ?? null,
            'solutions_of_interest' => $solutionsOfInterest,
            'current_systems_in_use' => $currentSystemsInUse,
            'implementation_timeline' => $validated['implementation_timeline'] ?? null,
            'expected_user_count_range' => $validated['expected_user_count_range'] ?? null,
            'additional_details' => $validated['additional_details'] ?? null,
            'has_personal_data_consent' => true,
            'consent_text_version' => 'v1',
            'status' => 'new',
        ]);

        return redirect()->route('get.demo_page')->with('success', 'Your demo request has been submitted.');
    }
}
