<?php

use Philo\Blade\Blade;

function view($path, array $data = []) {
    $view_path = __DIR__ .'/../../resources/views/';
    $cache_path = __DIR__ .'/../../bootstrap/cache/';
    
    $blade = new Blade($view_path, $cache_path);

    echo $blade->view()->make($path, $data)->render();
}