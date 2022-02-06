<?php
require_once __DIR__.'/../vendor/autoload.php';

use App\Factory;
use App\Style\ArtDeco;
use App\Style\Victorian;
use App\Style\Modern;
$client = new Factory(new ArtDeco());
echo $client->getCoffeTable() ."\n";
echo $client->getChair() ."\n";
echo $client->getSofa() ."\n";

