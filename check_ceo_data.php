<?php
require_once 'bootstrap/app.php';

try {
    $app = require_once 'bootstrap/app.php';
    
    echo "=== CEO Forum Data Check ===" . PHP_EOL;
    
    $ceoForums = \App\CEOForum::orderBy('post_date', 'DESC')->limit(5)->get();
    
    echo "Total CEO Forum records: " . \App\CEOForum::count() . PHP_EOL;
    echo "Records fetched: " . $ceoForums->count() . PHP_EOL . PHP_EOL;
    
    foreach ($ceoForums as $index => $forum) {
        echo "=== Record " . ($index + 1) . " ===" . PHP_EOL;
        echo "ID: " . ($forum->id ?? 'NULL') . PHP_EOL;
        echo "Title: " . ($forum->title ?? 'NULL') . PHP_EOL;
        echo "Image URL: " . ($forum->image_url ?? 'NULL') . PHP_EOL;
        echo "Body (first 100 chars): " . substr($forum->body ?? 'NULL', 0, 100) . PHP_EOL;
        echo "Slider Title: " . ($forum->slider_title ?? 'NULL') . PHP_EOL;
        echo "Post Date: " . ($forum->post_date ?? 'NULL') . PHP_EOL;
        echo "---" . PHP_EOL;
    }
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
?>
