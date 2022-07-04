<?php
$router = new AltoRouter;
$router->map('GET', '/ecommerce/home', 'App\Controllers\IndexController@show', 'home');
$router = new AltoRouter;
$router->map('GET', '/ecommerce/admin', 'App\Controllers\admin\DashboardController@show', 'admin_dashboard');
$router->map('POST', '/ecommerce/admin', 'App\Controllers\admin\DashboardController@get', 'admin');
// $match = $router->match();
// if($match){
    
//     require_once __DIR__ . '/../controllers/IndexController.php';
//     list($controller, $method) = explode('@', $match['target']);
//     echo $controller . '</br>';
//     echo $method;

//     if(is_callable(array(new $controller, $method))){
//         call_user_func_array(array(new $controller, $method), array($match['params']));
//     }else{
//         echo "The method {$method} is not defined in {$controller}";
//     }
// }else{
//     header($_SERVER['SERVER_PROTOCOL'], '404 Not Found');
//     echo 'page not found';
// }