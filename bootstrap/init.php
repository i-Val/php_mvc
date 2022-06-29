<?php
//Start session if not already started
if(!isset($_SESSION)) session_start();

//Load environment variables
require_once __DIR__ . '/../app/config/_env.php';

//instantiate database class
new App\Classes\Database();

require_once __DIR__ . '/../app/routes/routes.php';

new \App\Routes\RouteDispatcher($router);