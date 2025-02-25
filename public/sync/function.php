<?php 
date_default_timezone_set("Asia/Jakarta");

function setting()
{
    return [
        'ENCRYPT_SECRET_KEY' => 'HmwuyB2LlOlovRKyVx0xBhT7BFKEfpaCtnmBOz',
        'ENCRYPT_SECRET_IV' => 'HmwuyB2LlOlovRKyVx0xBhT7BFKEfpaCtnmBOz',
        'ENCRYPT_METHOD' => 'aes-256-cbc',
    ];
}

function env($key)
{
    $setting = setting();
    return $setting[$key];
}

function get($key, $default = "")
{
    if (!empty($_GET[$key])) {
        return ($_GET[$key]);
    } else {
        return $default;
    }
}

function encrypt_string($string)
{
    $output = false;
    /*
    * read security.ini file & get encryption_key | iv | encryption_mechanism value for generating encryption code
    */        

    $secret_key     = env('ENCRYPT_SECRET_KEY');
    $secret_iv      = env('ENCRYPT_SECRET_IV');
    $encrypt_method = env('ENCRYPT_METHOD');
    // hash
    $key    = hash("sha256", $secret_key);
    // iv – encrypt method AES-256-CBC expects 16 bytes – else you will get a warning
    $iv     = substr(hash("sha256", $secret_iv), 0, 16);
    //do the encryption given text/string/number
    $result = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
    $output = base64_encode($result);
    return $output;
}

function decrypt_string($string)
{
    $output = false;
    /*
    * read security.ini file & get encryption_key | iv | encryption_mechanism value for generating encryption code
    */
    $secret_key     = env('ENCRYPT_SECRET_KEY');
    $secret_iv      = env('ENCRYPT_SECRET_IV');
    $encrypt_method = env('ENCRYPT_METHOD');
    // hash
    $key    = hash("sha256", $secret_key);
    // iv – encrypt method AES-256-CBC expects 16 bytes – else you will get a warning
    $iv = substr(hash("sha256", $secret_iv), 0, 16);
    //do the decryption given text/string/number
    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    return $output;
}