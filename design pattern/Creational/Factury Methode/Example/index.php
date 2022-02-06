<?php
require_once __DIR__.'/../vendor/autoload.php';

use App\Dialogs\Mobildialog;
use App\Dialogs\Systemdialog;
use App\Dialogs\Webdialog;


$input_button = new Systemdialog();
echo $input_button->renderButton();
$input_button = new Webdialog();
echo $input_button->renderButton();
$input_button = new Mobildialog();
echo $input_button->renderButton();



