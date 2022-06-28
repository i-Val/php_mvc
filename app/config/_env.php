<?php
define('BASE_PATH', realpath(__DIR__.'/../../'));

require_once __DIR__.'/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

// $dotEnv = new \Dotenv\Dotenv(BASE_PATH);

// $dotEnv->load();