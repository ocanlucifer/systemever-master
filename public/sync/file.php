<?php 
    //TOKEN VERIFICATION
    
    include __DIR__ . "/function.php";
    $token = get('token');
    $headerpath = "/home/pelangi4/PROD/systemever.co.id/storage/app/";
    $path = __DIR__ . "/../../storage/app/uploads";
    
    if ($token != encrypt_string(date("dmHdY")) ) {
        echo "Invalid token";
        exit();
    }

    function getDirContents($dir, &$results = array()) {
        $files = scandir($dir);
    
        foreach ($files as $key => $value) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path)) {
                $results[] = $path;
            } else if ($value != "." && $value != "..") {
                getDirContents($path, $results);
                $results[] = $path;
            }
        }
    
        return $results;
    }
    
    $all_path = getDirContents($path);

    $all_file = [];
    foreach ($all_path as $v) {
        if (is_dir($v)) {
            continue;
        }
        $all_file[] =  str_replace($headerpath, "", $v);
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($all_file);
