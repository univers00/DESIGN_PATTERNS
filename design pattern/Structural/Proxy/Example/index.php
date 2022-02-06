<?php
namespace App;

require_once (__DIR__."/../vendor/autoload.php");



$chaching = new CachingDownload(new SimpleDownload());
echo $chaching->download("www.google.com");
echo $chaching->download("www.google.com");
echo $chaching->download("www.google.com");
echo $chaching->download("www.youtube.com");
