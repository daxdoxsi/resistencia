<?php

# Parsing URI
$uri = trim($_SERVER["REQUEST_URI"]," \t");

# Extracting language from the URL
$confPath = __DIR__.'/../.conf.php';
if (!file_exists($confPath)) die("Configuration file is missing...");
$conf = require($confPath);

switch ($uri) {
    case '':
        loadController('main');
        break;
    case 'about':
        loadController('about');
        break;
    default:

        break;
}