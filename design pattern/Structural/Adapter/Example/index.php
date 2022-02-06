<?php
namespace App;
use App\Service\EmailNotification;
use App\Service\SlackNotification\SlackApi;
use App\Service\SlackNotification\SlackNotification;

require_once __DIR__.'/../vendor/autoload.php';
$email = new EmailNotification("tizgha.anouar@gmail.com","tizgha.anouar@outlook.com",'notification title',"hello");
echo $email->sendMessage();

$slack = new SlackNotification("hello this is body of notification",new SlackApi());
echo $slack->sendMessage();
