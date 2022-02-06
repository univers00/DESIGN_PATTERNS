<?php
namespace App;

use App\Algorithm\Facebook;
use App\Algorithm\Google;

require_once (__DIR__."/../vendor/autoload.php");


$facebook = new Facebook("univers00","123456789");
$facebook->post("hello there ........................");

echo "\n\n\n";

$google = new Google("univers00","123456789");
$google->post("hello there ........................");