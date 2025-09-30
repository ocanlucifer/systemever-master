<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
$langprefix = "/";
if (activelang() == "EN") {
    $langprefix = "/en/";
}

if (activelang() == "KOR") {
    $langprefix = "/kor/";
}
$query_url = [];
$redirector = [];
if (env("APP_ENV") == "production") {
    $redirector = \App\Redirector::orderBy("id", "desc")->get();
}

foreach ($redirector as $v) {
    $query = explode("?", $v->old_url);
    if (count($query) > 1) {
        $query[2] = $v->new_url;
        $query_url[$query[0]][] = [
            'uuid' => $query[1],
            'newurl' => $query[2]
        ];
        continue;
    }
    Route::get($v->old_url, function() use ($v) {
        return redirect($v->new_url);
    });
}

foreach($query_url as $mainroute => $param) {
    Route::get($mainroute, function() use ($param) {
        foreach($param as $v) {
            if ("uid=" . get('uid') == $v['uuid'])     {
                return redirect($v['newurl']);
            }
        }
    });
}


Route::prefix($langprefix)->group(function () {
    Route::get('', ['as' => 'get.index', 'uses' => '\App\Http\Controllers\Systemever\HomeController@index']);
    // Route::get('home', ['as' => 'get.index', 'uses' => '\App\Http\Controllers\Systemever\HomeController@index']);

    Route::get('about/indonesia-branch', ['as' => 'get.pages.abouts.indonesia_branch', 'uses' => '\App\Http\Controllers\Systemever\AboutController@indonesia_branch']);
    Route::get('about/system-ever', ['as' => 'get.pages.abouts.system_ever', 'uses' => '\App\Http\Controllers\Systemever\AboutController@system_ever']);
    Route::get('about/history', ['as' => 'get.pages.abouts.history', 'uses' => '\App\Http\Controllers\Systemever\AboutController@history']);

    Route::get('service/feature', ['as' => 'get.pages.services.feature', 'uses' => '\App\Http\Controllers\Systemever\ServiceController@service_feature']);
    // Route::get('support/quality-security', ['as' => 'get.pages.services.quality_security', 'uses' => '\App\Http\Controllers\Systemever\ServiceController@service_quality_security']);
    Route::get('service/customer-industry', ['as' => 'get.pages.services.customer_industry', 'uses' => '\App\Http\Controllers\Systemever\ServiceController@customer_industry']);

    Route::get('pricing/accounting-tax', ['as' => 'get.pages.pricing.accounting_tax', 'uses' => '\App\Http\Controllers\Systemever\PricingController@accounting_tax']);
    Route::get('pricing/integrated-erp', ['as' => 'get.pages.pricing.integrated_erp', 'uses' => '\App\Http\Controllers\Systemever\PricingController@integrated_erp']);


    Route::get('performance-quality', ['as' => 'get.pages.performance', 'uses' => '\App\Http\Controllers\Systemever\SolutionsController@performance']);
    Route::get('solutions/accountax-elearning', ['as' => 'get.pages.solutions.elearning', 'uses' => '\App\Http\Controllers\Systemever\SolutionsController@elearning']);





    Route::get('solutions', ['as' => 'get.pages.solutions.index', 'uses' => '\App\Http\Controllers\Systemever\SolutionsController@index']);
    Route::get('solutions/bms', ['as' => 'get.pages.solutions.bms', 'uses' => '\App\Http\Controllers\Systemever\SolutionsController@bms']);
    Route::get('solutions/accounting-management-systems', ['as' => 'get.pages.solutions.accounting_management_systems', 'uses' => '\App\Http\Controllers\Systemever\SolutionsController@accounting_management_systems']);
    Route::get('solutions/i5-trading', ['as' => 'get.pages.solutions.i5_trading', 'uses' => '\App\Http\Controllers\Systemever\SolutionsController@i5_trading']);
    Route::get('solutions/i7-manufacture', ['as' => 'get.pages.solutions.i7_manufacture', 'uses' => '\App\Http\Controllers\Systemever\SolutionsController@i7_manufacture']);

    Route::get('business-insight/article', ['as' => 'get.pages.article.article', 'uses' => '\App\Http\Controllers\Systemever\ArticleController@article']);
    Route::get('business-insight/article/search', ['as' => 'get.pages.article.article.search', 'uses' => '\App\Http\Controllers\Systemever\ArticleController@article_list_category']);
    Route::get('business-insight/article/mode', ['as' => 'get.pages.article.article.mode', 'uses' => '\App\Http\Controllers\Systemever\ArticleController@article_list_category']);
    Route::get('business-insight/article/detail/{slug}', ['as' => 'get.pages.article.article_detail', 'uses' => '\App\Http\Controllers\Systemever\ArticleController@article_detail']);
    Route::get('business-insight/news/detail', ['as' => 'get.pages.article.news_detail', 'uses' => '\App\Http\Controllers\Systemever\ArticleController@news_detail']);
    Route::get('business-insight/news', ['as' => 'get.pages.article.news', 'uses' => '\App\Http\Controllers\Systemever\ArticleController@news']);
    Route::get('business-insight/article/category', ['as' => 'get.pages.article.article_list_category', 'uses' => '\App\Http\Controllers\Systemever\ArticleController@article_list_category']);
    Route::get('business-insight/professional', ['as' => 'get.pages.article.professional', 'uses' => '\App\Http\Controllers\Systemever\ArticleController@professional']);
    Route::get('business-insight/ceo_forum/detail/{id}', ['as' => 'get.pages.article.ceo_forum_detail', 'uses' => '\App\Http\Controllers\Systemever\ArticleController@ceo_forum_detail']);
    Route::get('business-insight/ceo_forum', ['as' => 'get.pages.article.ceo_forum', 'uses' => '\App\Http\Controllers\Systemever\ArticleController@ceo_forum']);

    Route::get('support/faq', ['as' => 'get.pages.support.support', 'uses' => '\App\Http\Controllers\Systemever\FaqController@support']);
    Route::get('support/user-manual', ['as' => 'get.pages.support.user_manual', 'uses' => '\App\Http\Controllers\Systemever\SupportController@user_manual']);
    Route::get('support/support-guide', ['as' => 'get.pages.support.support_guide', 'uses' => '\App\Http\Controllers\Systemever\SupportController@support_guide']);
    Route::get('support/quality-security', ['as' => 'get.pages.support.quality_security', 'uses' => '\App\Http\Controllers\Systemever\ServiceController@service_quality_security']);

    Route::get('support/video', ['as' => 'get.pages.support.video', 'uses' => '\App\Http\Controllers\Systemever\VideoController@video']);
    Route::get('support/video/detail/{slug}', ['as' => 'get.pages.support.video.detail', 'uses' => '\App\Http\Controllers\Systemever\VideoController@detail']);
    Route::get('support/video/search', ['as' => 'get.pages.support.video.search', 'uses' => '\App\Http\Controllers\Systemever\VideoController@search']);

    Route::get('join-partnership', ['as' => 'get.pages.join_partnership', 'uses' => '\App\Http\Controllers\Systemever\PartnershipController@join_partnership']);

    Route::get('legal/{slug}', ['as' => 'get.legal', 'uses' => '\App\Http\Controllers\Systemever\LegalController@detail']);

    Route::get('/contact', ['as' => 'get.contact', 'uses' => '\App\Http\Controllers\Systemever\ContactController@form']);

    Route::post('/form', ['as' => 'post.form.submit', 'uses' => '\App\Http\Controllers\Systemever\HomeController@form']);
    Route::get('/notice', ['as' => 'get.pages.notice', 'uses' => '\App\Http\Controllers\Systemever\NoticeController@index']);
    Route::get('/notice/detail/{slug}', ['as' => 'get.pages.notice.detail', 'uses' => '\App\Http\Controllers\Systemever\NoticeController@detail']);

    //new
    Route::get('/landing', ['as' => 'get.landing', 'uses' => '\App\Http\Controllers\Systemever\LandingPageController@index']);
    
    // IT Inventory page - Multilingual
    Route::get('ITInventory', ['as' => 'get.pages.it_inventory', 'uses' => '\App\Http\Controllers\Systemever\ITInventoryController@index']);
    Route::post('ITInventory', ['as' => 'post.pages.it_inventory', 'uses' => '\App\Http\Controllers\Systemever\ITInventoryController@submit'])->middleware('throttle:5,1');
    
    // English routes
    Route::get('en/ITInventory', ['as' => 'get.pages.it_inventory.en', 'uses' => '\App\Http\Controllers\Systemever\ITInventoryController@index']);
    Route::post('en/ITInventory', ['as' => 'post.pages.it_inventory.en', 'uses' => '\App\Http\Controllers\Systemever\ITInventoryController@submit'])->middleware('throttle:5,1');
    
    // Korean routes
    Route::get('kor/ITInventory', ['as' => 'get.pages.it_inventory.kor', 'uses' => '\App\Http\Controllers\Systemever\ITInventoryController@index']);
    Route::post('kor/ITInventory', ['as' => 'post.pages.it_inventory.kor', 'uses' => '\App\Http\Controllers\Systemever\ITInventoryController@submit'])->middleware('throttle:5,1');

    Route::get('/soundcloud', function () {
        return view('systemever/pages/article/test_audio_player');
    });

    Route::get('/check-play', function (Request $request) {
        $ip = $request->ip();
        // $track_id = $request->query('track_id');

        $exists = DB::table('audio_play_logs')
            ->where('ip_address', $ip)
            // ->where('track_id', $track_id)
            ->exists();

        return response()->json(['hasPlayed' => $exists]);
    });

    Route::post('/log-play', function (Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'track_id' => 'required|numeric',
        ]);

        DB::table('audio_play_logs')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'track_id' => $request->track_id,
            'ip_address' => $request->ip(),
            'played_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['status' => 'ok']);
    });
});

// Route::prefix('frontend')->group(function () {
//     Route::get('', ['as' => 'frontend.index', 'uses' => '\App\Http\Controllers\FrontendController@index']);
//     Route::get('home', ['as' => 'frontend.index', 'uses' => '\App\Http\Controllers\FrontendController@index']);
//     Route::get('about/indonesia-branch', ['as' => 'frontend.pages.abouts.indonesia_branch', 'uses' => '\App\Http\Controllers\FrontendController@indonesia_branch']);
//     Route::get('about/system-ever', ['as' => 'frontend.pages.abouts.system_ever', 'uses' => '\App\Http\Controllers\FrontendController@system_ever']);
//     Route::get('about/history', ['as' => 'frontend.pages.abouts.history', 'uses' => '\App\Http\Controllers\FrontendController@history']);

//     Route::get('service/feature', ['as' => 'frontend.pages.services.feature', 'uses' => '\App\Http\Controllers\FrontendController@service_feature']);
//     Route::get('service/quality-security', ['as' => 'frontend.pages.services.quality_security', 'uses' => '\App\Http\Controllers\FrontendController@service_quality_security']);
//     Route::get('service/customer-industry', ['as' => 'frontend.pages.services.customer_industry', 'uses' => '\App\Http\Controllers\FrontendController@customer_industry']);

//     Route::get('pricing/accounting-tax', ['as' => 'frontend.pages.pricing.accounting_tax', 'uses' => '\App\Http\Controllers\FrontendController@accounting_tax']);
//     Route::get('pricing/integrated-erp', ['as' => 'frontend.pages.pricing.integrated_erp', 'uses' => '\App\Http\Controllers\FrontendController@integrated_erp']);

//     Route::get('solutions/accounting-management-systems', ['as' => 'frontend.pages.solutions.accounting_management_systems', 'uses' => '\App\Http\Controllers\FrontendController@accounting_management_systems']);
//     Route::get('solutions/i5-trading', ['as' => 'frontend.pages.solutions.i5_trading', 'uses' => '\App\Http\Controllers\FrontendController@i5_trading']);
//     Route::get('solutions/i7-manufacture', ['as' => 'frontend.pages.solutions.i7_manufacture', 'uses' => '\App\Http\Controllers\FrontendController@i7_manufacture']);

//     Route::get('business-insight/article', ['as' => 'frontend.pages.article.article', 'uses' => '\App\Http\Controllers\FrontendController@article']);
//     Route::get('business-insight/article/detail', ['as' => 'frontend.pages.article.article_detail', 'uses' => '\App\Http\Controllers\FrontendController@article_detail']);
//     Route::get('business-insight/news/detail', ['as' => 'frontend.pages.article.news_detail', 'uses' => '\App\Http\Controllers\FrontendController@news_detail']);
//     Route::get('business-insight/news', ['as' => 'frontend.pages.article.news', 'uses' => '\App\Http\Controllers\FrontendController@news']);
//     Route::get('business-insight/article/category', ['as' => 'frontend.pages.article.article_list_category', 'uses' => '\App\Http\Controllers\FrontendController@article_list_category']);

//     Route::get('support/faq', ['as' => 'frontend.pages.support.support', 'uses' => '\App\Http\Controllers\FrontendController@support']);
//     Route::get('support/video', ['as' => 'frontend.pages.support.video', 'uses' => '\App\Http\Controllers\FrontendController@video']);
//     Route::get('support/support-guide', ['as' => 'frontend.pages.support.support_guide', 'uses' => '\App\Http\Controllers\FrontendController@support_guide']);

//     Route::get('join-partnership', ['as' => 'frontend.pages.join_partnership', 'uses' => '\App\Http\Controllers\FrontendController@join_partnership']);
// });
// Route::get('clear-cache', function() {
//     Artisan::call('cache:clear');
//     Artisan::call('config:cache');
//     Artisan::call('view:clear');
//     return "Cleared!";
// });

Route::prefix('integrated')->group(function () {
    Route::get('', ['as' => 'integrated.index', 'uses' => '\App\Http\Controllers\FrontendController@index']);
    Route::get('home', ['as' => 'integrated.index', 'uses' => '\App\Http\Controllers\FrontendController@index']);
    Route::get('about/indonesia-branch', ['as' => 'integrated.pages.abouts.indonesia_branch', 'uses' => '\App\Http\Controllers\FrontendController@indonesia_branch']);
    Route::get('about/system-ever', ['as' => 'integrated.pages.abouts.system_ever', 'uses' => '\App\Http\Controllers\FrontendController@system_ever']);
    Route::get('about/history', ['as' => 'integrated.pages.abouts.history', 'uses' => '\App\Http\Controllers\FrontendController@history']);

    Route::get('service/feature', ['as' => 'integrated.pages.services.feature', 'uses' => '\App\Http\Controllers\FrontendController@service_feature']);
    Route::get('service/quality-security', ['as' => 'integrated.pages.services.quality_security', 'uses' => '\App\Http\Controllers\FrontendController@service_quality_security']);
    Route::get('service/customer-industry', ['as' => 'integrated.pages.services.customer_industry', 'uses' => '\App\Http\Controllers\FrontendController@customer_industry']);

    Route::get('pricing/accounting-tax', ['as' => 'integrated.pages.pricing.accounting_tax', 'uses' => '\App\Http\Controllers\FrontendController@accounting_tax']);
    Route::get('pricing/integrated-erp', ['as' => 'integrated.pages.pricing.integrated_erp', 'uses' => '\App\Http\Controllers\FrontendController@integrated_erp']);

    Route::get('solutions/accounting-management-systems', ['as' => 'integrated.pages.solutions.accounting_management_systems', 'uses' => '\App\Http\Controllers\FrontendController@accounting_management_systems']);
    Route::get('solutions/i5-trading', ['as' => 'integrated.pages.solutions.i5_trading', 'uses' => '\App\Http\Controllers\FrontendController@i5_trading']);
    Route::get('solutions/i7-manufacture', ['as' => 'integrated.pages.solutions.i7_manufacture', 'uses' => '\App\Http\Controllers\FrontendController@i7_manufacture']);

    Route::get('business-insight/article', ['as' => 'integrated.pages.article.article', 'uses' => '\App\Http\Controllers\FrontendController@article']);
    Route::get('business-insight/article/detail', ['as' => 'integrated.pages.article.article_detail', 'uses' => '\App\Http\Controllers\FrontendController@article_detail']);
    Route::get('business-insight/news/detail', ['as' => 'integrated.pages.article.news_detail', 'uses' => '\App\Http\Controllers\FrontendController@news_detail']);
    Route::get('business-insight/news', ['as' => 'integrated.pages.article.news', 'uses' => '\App\Http\Controllers\FrontendController@news']);
    Route::get('business-insight/article/category', ['as' => 'integrated.pages.article.article_list_category', 'uses' => '\App\Http\Controllers\FrontendController@article_list_category']);


    Route::get('support/faq', ['as' => 'integrated.pages.support.support', 'uses' => '\App\Http\Controllers\FrontendController@support']);
    Route::get('support/video', ['as' => 'integrated.pages.support.video', 'uses' => '\App\Http\Controllers\FrontendController@video']);
});

/* helper */
// Route::get('/lang/{id}', 'Web\LanguageController@setlang')->name('get.lang');
Route::get('/delete-filemanager', 'DeleteFilemanagerController@filemanagerDelete')->name('delete-filemanager');
Route::get('/lang/ID', 'Api\HelperController@langid')->name('get.helper.langid');
Route::get('/lang/EN', 'Api\HelperController@langen')->name('get.helper.langen');
Route::get('/lang/KOR', 'Api\HelperController@langkor')->name('get.helper.langkor');
Route::post('/form/newsletter', 'Api\HelperController@newsletter')->name('get.helper.newsletter');


Route::get('/sitemap.xml', '\App\Http\Controllers\Systemever\SitemapController@index')->name('get.sitemap');
