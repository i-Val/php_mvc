<?php

require_once __DIR__ . '/../bootstrap/init.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$app_name = $_ENV["APP_NAME"];

$user = Capsule::table('users')->where('id', 1)->first();
var_dump($user);