<?php

function merchantCategoryOption()
{
    $options = [];
    $merchant_category = \App\MerchantCategory::whereRaw('parent_id is null OR parent_id = 0')->get();
    foreach ($merchant_category as $v1) {
        $options[$v1->id] = $v1->name;
        $merchant_category1 = \App\MerchantCategory::where("parent_id", $v1->id)->get();
        if (!empty($merchant_category1)) {
            foreach ($merchant_category1 as $v2) {
                $options[$v2->id] = str_repeat("-", 3) . $v2->name;
                $merchant_category2 = \App\MerchantCategory::where("parent_id", $v2->id)->get();
                if (!empty($merchant_category2)) {
                    foreach ($merchant_category2 as $v3) {
                        $options[$v3->id] = str_repeat("-", 6) . $v3->name;
                    }
                }
            }
        }
    }

    return $options;
}

function editValue($table, $select_id)
{
    $param = \Route::current()->parameters;
    $value = null;
    if (!empty($param['one'])) {
        $merchant = \DB::table($table)->find($param['one']);
        if (!empty($merchant)) {
            $value = $merchant->{$select_id};
        }
    }

    return $value;
}

function get($key, $default = "")
{
    if (!empty($_GET[$key])) {
        return ($_GET[$key]);
    } else {
        return $default;
    }
}

function zeroDefault($param)
{
    if (!empty($param) && is_numeric($param)) {
        return $param;
    } else {
        return 0;
    }
}

function slug($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

function mediaUrlById($id)
{
    $media = \App\Medias::find($id);
    if (!empty($media)) {
        return $media->url;
    } else {
        return "";
    }
}

function nominal($nominal)
{
    if (isset($nominal)) {
        return number_format($nominal,0,',','.');
    } else {
        return number_format(0,0,',','.');
    }
}

function groupBy($data, $groupby)
{
    $grouped = [];
    if (!empty($data)) {
        foreach ($data as $v) {
            $grouped[$v->{$groupby}] = $v;
        }
    }
    return $grouped;
}

function weightFactor($weight)
{
    if ($weight < 1000) {
        return 1;
    } else {
        return (int)($weight / 1000);
    }
}

function paginationExplode($data)
{
    $meta = $full = $data->toArray();
    unset($meta["data"]);
    return [
        "meta" => $meta,
        "data" => $full["data"]
    ];
}

function json($data)
{
    return response()->json($data, $data['code']);
}

function noSpace($string)
{
    return str_replace(" ", "", $string);
}

function plainjson($data)
{    
    return response()->json($data['data'], $data['code']);
}

function camelkey($data) {
    $res = [];
    foreach ($data->toArray() as $k => $v) {
        $res[camel_case($k)] = $v;
    }
    return $res;
}

function orderIdGenerator($user)
{
    return $user->id . "456" . date("YmdHism");
}

function defaults($statment_1, $statment_2)
{
    if (!empty($statment_1)) {
        return $statment_1;
    } else {
        return $statment_2;
    }
}

function get_category()
{
    $cat = \App\Categories::get();
    return $cat;
}

function slugify($string)
{
    return \Illuminate\Support\Str::slug($string, "-");
}

function six_random()
{
    return sprintf("%06d", mt_rand(1, 999999));
}

function is_login()
{
    if (!empty(\Session::get("login"))) {
        return true;
    } else {
        return false;
    }
}

function get_login()
{
    $login = \Session::get("login");
    $user_token = \App\UserToken::where('jwt_token' , $login['id_token'])->first();
    return \App\User::find($user_token->user_id);
}

function is_new($date)
{
    if (strtotime($date) >= strtotime(date("Y-m-d") . " -3 days")) {
        return true;
    } else {
        return false;
    }
}

function uri($path, $default = "")
{
    if (!empty($path)) {
        return (asset($path));
    } else {
        if (!empty($default)) {
            return (asset($default));
        } else {
            return null;
        }
    }
}

function set_http_query($key = "", $value = "", $toggle = false)
{
    $query = [];
    $query_string = [];
    if (!empty($_GET)) {
        foreach ($_GET as $k => $v) {
            $query[$k] = $v;
        }
    }

    if (empty($_GET[$key])) {
        $query[$key] = $value;
    }

    if (!empty($_GET[$key])) {
        $query[$key] = $value;
        if ($toggle) {
            if ($query[$key] == $value) {
                unset($query[$key]);
            }
        }
    }

    if ($key != "page") {
        unset($query["page"]);
    }

    foreach ($query as $k => $q) {
        $query_string[] = $k . "=" . $q;
    }

    return "?" . join($query_string, "&");
}

function set_http_query_multi($param = [], $toggle = false)
{
    $query = [];
    $query_string = [];
    if (!empty($_GET)) {
        foreach ($_GET as $k => $v) {
            $query[$k] = $v;
        }
    }

    foreach($param as $k => $v) {
        if (empty($_GET[$k])) {
            $query[$k] = $v;
        }

        if (!empty($_GET[$k])) {
            $query[$k] = $v;
            if ($toggle) {
                if ($query[$k] == $v) {
                    unset($query[$k]);
                }
            }
        }
    }

    if ($key != "page") {
        unset($query["page"]);
    }

    foreach ($query as $k => $q) {
        $query_string[] = $k . "=" . $q;
    }

    return "?" . join($query_string, "&");
}

function cart_count()
{
    return \App\Cart::where("users_id", get_login()->id)->count();
}

function payment_method_list()
{
    $selected_payment_methode = explode(",",env("MIDTRANS_ACTIVE_PAYMENT"));
    $payment_list =  [
        "credit_card" => "Credit Card",
        "cimb_clicks" => "CIMB Click",
        "bca_klikbca" => "Klick BCA",
        "bca_klikpay" => "BCA Klikpay",
        "bri_epay" => "BRI E-Pay",
        "telkomsel_cash" => "Telkomsel Cash",
        "echannel" => "Mandiri E-Channel",
        "permata_va" => "Permata Virtual Account",
        "other_va" => "Bank Lain Virtual Account",
        "bca_va" => "BCA Virtual Account",
        "bni_va" => "BNI Virtual Account",
        "bri_va" => "BRI Virtual Account",
        "indomaret" => "Indomaret Pay",
        "danamon_online" => "Danamon Online",
        "akulaku" => "Akulaku",
        "shopeepay" => "Shopee Pay",
        "gopay" => "Gopay"
    ];

    if (!empty($selected_payment_methode) && $selected_payment_methode[0] != "") {
        $res = [];
        foreach ($payment_list as $k => $v) {
            if (in_array($k, $selected_payment_methode)) {
                $res[$k] = $v;
            }
        }
    } else {
        $res = $payment_list;
    }
    
    return $res;
}

function payment_method_label($key)
{
    $label = payment_method_list();

    return $label[$key];
}

function login_user()
{
    $login = session("login");    
    $user_token = \App\UserToken::where('jwt_token' , $login['id_token'])->first();
    if (!empty($user_token)) {
        $user = \App\User::find($user_token->user_id);
        if (!empty($user)) {
            return $user;
        }
    }

    return null;
}

function mytoken()
{
    $login = session("login");    
    if (!empty($login['id_token'])) {
        return $login['id_token'];
    } else {
        return null;
    }
}

function bulan_str($n)
{
    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    $bulan = ["January", "February", "Mart", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    return $bulan[($n-1)];
}

function getFungsiKerja()
{
    return [
        "Sales" => "Sales",
        "Marketing" => "Marketing",
        "Finance" => "Finance",
        "HR" => "HR",
        "Produksi" => "Produksi",
        "IT" => "IT",
        "Legal" => "Legal",
        "Pengusaha" => "Founder/Owner/Pengusaha"
    ];
}

function classSlug($class)
{
    return slugify($class->title . "-" . $class->id);
}

function video_progress($user_id, $class_id)
{
    $journey = \App\Service\ClassJourneyService::detail($user_id, $class_id);
    $list = $journey->video_progress;
    if (!empty($list)) {
        return $list;
    } else {
        return [];
    }
}

function journey($user_id, $class_id)
{
    return \App\Service\ClassJourneyService::detail($user_id, $class_id);
}

function is_viewed($content_id, $viewed_list)
{
    if (in_array($content_id, $viewed_list)) {
        return true;
    } else {
        return false;
    }
}

function paymentmethod()
{
    $selected_payment_methode = explode(",",env("MIDTRANS_ACTIVE_PAYMENT"));
    $payment_method = array(
        [
            'title_method'=>'Kartu Kredit',
            'method'=>array(
                [
                    'img_method'=>'group-58@3x.png',
                    'label_method'=>'Kartu Kredit',
                    'value'=>'credit_card',
                    'inisial'=>'credit_card'
                ]
            )
        ],
        [
            'title_method'=>'Internet Banking',
            'method'=>array(
                [
                    'img_method'=>'group-52@3x-1.png',
                    'label_method'=>'BCA KlikBCA',
                    'value'=>'bca_klikbca',
                    'inisial'=>'bca_klikbca'
                ],
                [
                    'img_method'=>'group-57@3x.png',
                    'label_method'=>'BCA Klikpay',
                    'value'=>'bca_klikpay',
                    'inisial'=>'bca_klikpay'
                ]
            )
        ],
        [
            'title_method'=>'ATM / Virtual Account',
            'method'=>array(
                [
                    'img_method'=>'group-60@3x.png',
                    'label_method'=>'BNI Virtual Account',
                    'value'=>'bni_va',
                    'inisial'=>'bni_va'
                ],
                [
                    'img_method'=>'group-55@3x.png',
                    'label_method'=>'BRI Virtual Account',
                    'value'=>'bri_va',
                    'inisial'=>'bri_va'
                ],
                [
                    'img_method'=>'group-54@3x.png',
                    'label_method'=>'Permata Virtual Account',
                    'value'=>'permata_va',
                    'inisial'=>'permata_va'
                ],
                [
                    'img_method'=>'group-52@3x.png',
                    'label_method'=>'BCA Virtual Account',
                    'value'=>'bca_va',
                    'inisial'=>'bca_va'
                ],
                [
                    'img_method'=>'group-51@3x.png',
                    'label_method'=>'Mandiri Virtual Account',
                    'value'=>'echannel',
                    'inisial'=>'echannel'
                ]
            )
        ],
        [
            'title_method'=>'Electronic Money',
            'method'=>array(
                // [
                //     'img_method'=>'',
                //     'label_method'=>'XL Tunai',
                //     'value'=>'EM01',
                //     'inisial'=>'EM'
                // ],
                // [
                //     'img_method'=>'',
                //     'label_method'=>'Mandiri e-cash',
                //     'value'=>'EM02',
                //     'inisial'=>'EM'
                // ],
                [
                    'img_method'=>'',
                    'label_method'=>'Go-Pay',
                    'value'=>'gopay',
                    'inisial'=>'gopay'
                ],
                [
                    'img_method'=>'',
                    'label_method'=>'BRI E-Pay',
                    'value'=>'bri_epay',
                    'inisial'=>'bri_epay'
                ],
                [
                    'img_method'=>'',
                    'label_method'=>'Telkomsel Cash',
                    'value'=>'telkomsel_cash',
                    'inisial'=>'telkomsel_cash'
                ],
                [
                    'img_method'=>'',
                    'label_method'=>'Shopee Pay',
                    'value'=>'shopeepay',
                    'inisial'=>'shopeepay'
                ],
                [
                    'img_method'=>'',
                    'label_method'=>'Danamon Online',
                    'value'=>'danamon_online',
                    'inisial'=>'danamon_online'
                ],
                // [
                //     'img_method'=>'',
                //     'label_method'=>'Qris',
                //     'value'=>'EM04',
                //     'inisial'=>'EM'
                // ]
            )
        ],
        // [
        //     'title_method'=>'Customer Financing',
        //     'method'=>array(
        //         [
        //             'img_method'=>'group-48@2x.png',
        //             'label_method'=>'Akulaku',
        //             'value'=>'akulaku',
        //             'inisial'=>'akulaku'
        //         ],
        //     )
        // ],
        [
            'title_method'=>'Over the Counter',
            'method'=>array(
                // [
                //     'img_method'=>'group-47@3x.png',
                //     'label_method'=>'Alfamart',
                //     'value'=>'OC01',
                //     'inisial'=>'OC'
                // ],
                [
                    'img_method'=>'group-46@3x.png',
                    'label_method'=>'Indomaret Pay',
                    'value'=>'indomaret',
                    'inisial'=>'indomaret'
                ],
                
                // [
                //     'img_method'=>'group-46@3x.png',
                //     'label_method'=>'Indomaret (Phoenix)',
                //     'value'=>'OC03',
                //     'inisial'=>'OC'
                // ],
                // [
                //     'img_method'=>'group-46@3x.png',
                //     'label_method'=>'Indomaret Enfpoint',
                //     'value'=>'OC04',
                //     'inisial'=>'OC'
                // ],
            )
        ],
    );

    if (!empty($selected_payment_methode) && $selected_payment_methode[0] != "") {
        foreach ($payment_method as $key => $val) {
            foreach ($payment_method[$key]['method'] as $k => $v) {
                if (in_array($payment_method[$key]['method'][$k]['inisial'], $selected_payment_methode)) {
                    $payment_method[$key]['method'][$k]['is_active'] = true;
                } else {
                    $payment_method[$key]['method'][$k]['is_active'] = false;
                }
            }
        }
    } else {
        foreach ($payment_method as $key => $val) {
            foreach ($payment_method[$key]['method'] as $k => $v) {
                $payment_method[$key]['method'][$k]['is_active'] = true;
            }
        }
    }    

    return $payment_method;
}

function tipefile($str)
{
    return substr($str, -3);
}

function validation_message($arr) {
    $html = '';
    if (!empty($arr)) {
        foreach ($arr as $v) {
            $html .= '<small class="text-danger">'.$v.'</small>';
        }
    }

    return $html;
}

function cmp_asc($a, $b)
{
    $a = $a[$GLOBALS['field']];
    $b = $b[$GLOBALS['field']];

    if ($a == $b)
    {
        return 0;
    }

    return ($a < $b) ? -1 : 1;
}

function cmp_desc($a, $b)
{
    $a = $a[$GLOBALS['field']];
    $b = $b[$GLOBALS['field']];

    if ($a == $b)
    {
        return 0;
    }

    return ($a > $b) ? -1 : 1;
}

function sortBy($field, &$array, $direction = 'asc')
{
    $result = false;
    $GLOBALS['field'] = $field;
    if ($direction == 'asc') {
        $result = usort($array, "cmp_asc");
    } else {
        $result = usort($array, "cmp_desc");
    }
    $GLOBALS['field'] = null;    

    return $result;
}

function setting($key, $default = "")
{
    load_setting();
    $exist = \Illuminate\Support\Facades\Storage::exists('setting/MAIN_SETTING_CONFIG');
    if ($exist) {
        $config = \Illuminate\Support\Facades\Storage::get('setting/MAIN_SETTING_CONFIG');
        if (empty($config)) {
            load_setting();
            $config = \Illuminate\Support\Facades\Storage::get('setting/MAIN_SETTING_CONFIG');
        }
    } else {
        load_setting();
        $config = \Illuminate\Support\Facades\Storage::get('setting/MAIN_SETTING_CONFIG');
    }

    $config = json_decode($config, true);    
    // dd($config);
    
    if (!empty($config)) {
        if (is_string($config[$key])) {
            return $config[$key];
        } else {
            return $default;
        }
    } else {
        return $default;
    }
}

function load_setting()
{
    $setting = \App\Settings::all();
    $config = [];
    foreach ($setting as $v) {
        $config[$v->key] = $v->value;
    }

    $config = json_encode($config);

    \Illuminate\Support\Facades\Storage::put('setting/MAIN_SETTING_CONFIG', $config);
}

function toAlphanum($string)
{
    $str = slugify($string);
    return str_replace("-", " ", $str);
}

function dateformat($datetime, $plus = "")
{
    $datetime = gmt_plus($datetime);
    return date("d F Y", strtotime($datetime . " " . $plus)) . " | " . date("H:i", strtotime($datetime . " " . $plus));
}

function dateformatsimple($datetime)
{
    $datetime = gmt_plus($datetime);
    return date("d M Y", strtotime($datetime));
}

function dateformatsimplenoyear($datetime)
{
    $datetime = gmt_plus($datetime);
    return date("d M", strtotime($datetime));
}

function gmt_plus($datetime, $plus = 0)
{
    if (!empty($plus)) {
        return date("Y-m-d H:i:s", strtotime($datetime . " +$plus hours"));
    } else {
        return date("Y-m-d H:i:s", strtotime($datetime . " +7 hours"));
    }
}

function show_rating($class)
{
    if (empty($class->organic_rating)) {
        $rating =  $class->rating > 3 ? $class->rating : 3.5;
    } else {
        $rating = $class->organic_rating;
    }

    return number_format($rating, 1, ".", ".");
}

function curl_get_contents($url) {
    // Initiate the curl session
    $ch = curl_init();
    // Set the URL
    curl_setopt($ch, CURLOPT_URL, $url);
    // Removes the headers from the output
    curl_setopt($ch, CURLOPT_HEADER, 0);
    // Return the output instead of displaying it directly
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // Execute the curl session
    $output = curl_exec($ch);
    // Close the curl session
    curl_close($ch);
    // Return the output as a variable
    return $output;
}

function activelang()
{
    // dd(\Request::segment(1));
    // dd(\Session::get("lang"));
    if (\Request::segment(1) == "en") {
        return "EN";
    } else {
        return "ID";
    }
}

function stringlang($eng, $ind)
{
    if (activelang() == "EN") {
        return $eng;
    } else {
        return $ind;
    }
}

function lang($arr)
{
    return $arr[activelang()];
}

function legal_page_list()
{
    $post = \App\Post::where([
        ["lang", activelang()],
        ["tipe", "LEGAL"]
    ])->get();

    return $post;
}

function seohelper($type, $location, $reff = 0)
{
    $param[] = ["type", $type];
    $param[] = ["location", $location];
    if (!empty($reff)) {
        $param[] = ["reff_id", $reff];
    }

    return \App\SeoTag::where($param)->first();
}

function ordefault($target, $default = "")
{
    if (!empty($target)) {
        return $target;
    } else {
        return $default;
    }
}

function obj_count($obj)
{
    if (empty($obj)) {
        return 0;
    }
    
    $count = 0;
    foreach ($obj as $v) {
        $count++;
    }

    return $count;
}

function obj_biggest($obj)
{
    if (empty($obj)) {
        return 0;
    }
    
    $list = [];
    foreach ($obj as $k => $v) {
        $list[] = $k;
    }

    $max = max($list);

    return $$max + 1;
}

function url_to_svg($url)
{
    
    $is_compress = env('WEBP_COMPRESS', true);
    if (!$is_compress) {
        return $url;
    }
    //return $url;
    $extension = substr(uri($url), -3, 3);
    if ($extension == 'svg') {
        $url = 	'data:image/svg+xml;base64,' . base64_encode(@file_get_contents($url));
    }
    return $url;
}

function get_extension($url)
{
    return substr(uri($url), -3, 3);
}

function pre($data)
{
    echo "<pre>"; print_r($data); exit();
}

function group_array($data, $group)
{
    $list = [];
    foreach($data as $v) {
        $list[$v->{$group}][] = $v;
    }
    return $list;
}

function get_youtube_id($url) {
    $parts = parse_url($url);
    if(isset($parts['query'])){
        parse_str($parts['query'], $qs);
        if(isset($qs['v'])){
            return $qs['v'];
        }else if(isset($qs['vi'])){
            return $qs['vi'];
        }
    }
    if(isset($parts['path'])){
        $path = explode('/', trim($parts['path'], '/'));
        return $path[count($path)-1];
    }
    return false;
}

function post_tag($post_id)
{
    $meta = \App\PostMeta::where([
        ["post_id", $post_id],
        // ["meta_key", "tag"]
    ])->get()->pluck("meta_value");

    return $meta;
}

function asset_to_webp($source)
{
    // return $source;
    $is_compress = env('WEBP_COMPRESS', true);
    if (!$is_compress) {
        return $source;
    }
    //object
    $asset = \App\AssetCompressMapper::where("md5", md5($source))->first();
    //extension check
    $extension = explode(".", $source);
    if (count($extension) < 2) {
        return $source;
    }

    if (empty($asset)) {
        $target_url = "uploads/compress/" . md5($source) . ".webp";
        $target = __DIR__ . "/../storage/app/" . $target_url;
        $new_file = resize(0, $target, $source);        

        $asset = new \App\AssetCompressMapper;
        $asset->md5 = md5($source);
        $asset->image_source = $source;
        $asset->image_target = $target_url;

        if ($new_file === false) {
            $asset->image_target = $source;
        }

        $asset->save();

        return url($asset->image_target);
    } else {
        return url($asset->image_target);
    }
}

function resize($newWidth, $targetFile, $originalFile) {

    @$info = getimagesize($originalFile);
    $mime = $info['mime'];

    switch ($mime) {
            case 'image/jpeg':
                    $image_create_func = 'imagecreatefromjpeg';
                    break;

            case 'image/png':
                    $image_create_func = 'imagecreatefrompng';
                    break;
                    
            default: 
                    return false;
    }

    $img = $image_create_func($originalFile);
    list($width, $height) = getimagesize($originalFile);


    if ($newWidth == 0) {
        $newWidth = $width;
        $newHeight = $height;
    } else {
        $newHeight = ($height / $width) * $newWidth;        
    }

    $tmp = imagecreatetruecolor($newWidth, $newHeight);
    imagesavealpha($tmp, true);
    imagealphablending($tmp, false);
    $white = imagecolorallocatealpha($tmp, 255, 255, 255, 127);
    imagefill($tmp, 0, 0, $white);
    imagecopyresampled($tmp, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);    
    imagewebp($tmp, $targetFile, 100);

    return true;
}

function remove_attr_tag($string)
{
    return preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/si",'<$1$2>', $string);
}

function seeinindo()
{
    $full = \Request::fullUrl();
    return str_replace("/en", "" , $full);

}

function seeineng($full = "")
{
    if (empty($full)) {
        $full = \Request::fullUrl();
    }
    return str_replace(url(""), url("") . "/en", $full);
}

function listfromtext($lists)
{
    $lists = nl2br($lists);
    $lists = explode("<br />", $lists);
    return $lists;
}

function read_file_online($url)
{
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    
    return $response;
}


function readFromFile($filePath) {
    // Check if the file exists
    if (file_exists($filePath)) {
        // Open the file for reading
        $fileHandle = fopen($filePath, 'r');

        // Check if the file is successfully opened
        if ($fileHandle) {
            // Read the entire file into a string
            $fileContent = fread($fileHandle, filesize($filePath));

            // Close the file handle
            fclose($fileHandle);

            // Return the file content
            return $fileContent;
        } else {
            // Error opening the file
            return null;
        }
    } else {
        // File does not exist
        return null;
    }
}

