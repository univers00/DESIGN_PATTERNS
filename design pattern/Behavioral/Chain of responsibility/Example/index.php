<?php
namespace App;

use App\Middleware\RoleCheckMiddleware;
use App\Middleware\ThrottlingMiddleware;
use App\Middleware\UserExistsMiddleware;

require_once (__DIR__."/../vendor/autoload.php");

$server = new Server();
$server->register("admin@admin.com","123");
$server->register("user@user.com","123");


$middleware1 = new ThrottlingMiddleware(2);  //check nombre of request per minute
$middleware2 = new UserExistsMiddleware($server);  // check user exist
$middleware3 = new RoleCheckMiddleware(); // check is admin or user


$middleware1->linkWith($middleware2)->linkWith($middleware3);
$middleware1->check("admin@admin.com","123");
$middleware1->check("user@user.com","123");