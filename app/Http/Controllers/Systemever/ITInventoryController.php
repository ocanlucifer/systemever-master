<?php

namespace App\Http\Controllers\Systemever;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ItInventoryInquiry;

class ITInventoryController extends Controller
{
    public function index()
    {
        $lang = activelang();
        $data = [];
        
        // Multi-language SEO data
        if ($lang == 'EN') {
            $data['seo'] = (object) [
                'meta_title' => "IT Inventory - SystemEver | Stop the Risk of Fines and License Suspension",
                'meta_description' => "Ensure compliance with Category A IT Inventory system. Full integration from warehouse to financial reports. Official validation from DJBC guarantees compliance.",
                'meta_keywords' => "IT Inventory, SystemEver, Bonded Zone, DJBC, Customs, Category A, Compliance, Integration",
                'meta_image' => asset('images/itinventory.png'),
                'canonical_url' => url('en/ITInventory')
            ];
        } elseif ($lang == 'KOR') {
            $data['seo'] = (object) [
                'meta_title' => "IT 인벤토리 - SystemEver | 벌금 및 라이센스 정지 위험 방지",
                'meta_description' => "Category A IT 인벤토리 시스템으로 규정 준수를 보장하세요. 창고에서 재무 보고서까지 완전 통합. DJBC의 공식 검증으로 준수 보장.",
                'meta_keywords' => "IT 인벤토리, SystemEver, 보세구역, DJBC, 세관, Category A, 규정준수, 통합",
                'meta_image' => asset('images/itinventory.png'),
                'canonical_url' => url('kor/ITInventory')
            ];
        } else {
            $data['seo'] = (object) [
                'meta_title' => "IT Inventory - SystemEver | Hentikan Risiko Denda dan Penangguhan Lisensi",
                'meta_description' => "Pastikan kepatuhan dengan sistem IT Inventory Kategori A. Integrasi penuh dari gudang hingga laporan keuangan. Validasi resmi dari DJBC menjamin kepatuhan.",
                'meta_keywords' => "IT Inventory, SystemEver, Kawasan Berikat, DJBC, Bea Cukai, Kategori A, Kepatuhan, Integrasi",
                'meta_image' => asset('images/itinventory.png'),
                'canonical_url' => url('ITInventory')
            ];
        }
        
        return view('systemever.pages.it_inventory.index', compact('data'));
    }

    public function submit(Request $request)
    {
        // Simple honeypot
        if ($request->filled('website')) {
            return back()->with('status', 'Terima kasih!');
        }
        // Flexible validation: support both old field set and new minimal form fields
        $rules = [
            // Old / extended fields
            'first_name'       => 'nullable|string|max:100',
            'last_name'        => 'nullable|string|max:100',
            'corporate_email'  => 'nullable|email|max:255',
            'phone_number'     => 'nullable|string|max:50',
            'job_title'        => 'nullable|string|max:255',
            // New simplified fields
            'name'             => 'nullable|string|max:200',
            'email'            => 'nullable|email|max:255',
            'phone'            => 'nullable|string|max:50',
            'position'         => 'nullable|string|max:255',
            // Shared
            'company'          => 'required|string|max:255',
            'message'          => 'required|string|max:5000',
        ];
        $validated = $request->validate($rules);

        // Derive full name (prefer new 'name', else combine first/last)
        $fullName = $request->input('name');
        if (!$fullName) {
            $fullName = trim(($request->input('first_name','')).' '.($request->input('last_name','')));
        }
        if ($fullName === '') { $fullName = 'Anonymous'; }

        // Derive email & phone (support both naming styles)
        $email = $request->input('corporate_email') ?? $request->input('email');
        $phone = $request->input('phone_number') ?? $request->input('phone');
        $job  = $request->input('job_title') ?? $request->input('position');

        // Enforce required email/phone after flexible merge
        $missing = [];
        if (!$email) $missing['email'] = 'Email wajib diisi.';
        if (!$phone) $missing['phone'] = 'Nomor telepon wajib diisi.';
        if ($missing) {
            return back()->withErrors($missing)->withInput();
        }

        $payload = [
            'full_name'    => $fullName,
            'company_name' => $request->input('company',''),
            'email'        => $email,
            'phone'        => $phone,
            'job_title'    => $job ?? '',
            'message'      => $request->input('message',''),
        ];

        // Debug logs (safe for development; remove in production if not needed)
        Log::info('ITInventory submit: validated payload', $payload);

        try {
            Mail::to('INFO@systemever.com')->send(new ItInventoryInquiry($payload));
            Log::info('ITInventory email dispatched to INFO@systemever.com');
        } catch (\Throwable $e) {
            Log::error('ITInventory email failed', ['message' => $e->getMessage()]);
        }

        return back()->with('status', 'Terima kasih! Kami akan menghubungi Anda dalam 24 jam.');
    }
}
