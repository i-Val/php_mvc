<?php

use Philo\Blade\Blade;

function view($path, array $data = []) {
    $view_path = __DIR__ .'/../../resources/views/';
    $cache_path = __DIR__ .'/../../bootstrap/cache/';
    
    $blade = new Blade($view_path, $cache_path);

    echo $blade->view()->make($path, $data)->render();
}

function make($filename, $data){
    
    extract($data);
    //turn on output buffering
    ob_start();

    //include template
    include('../resources/views/emails/' .$filename.'.php');
    //get file content
    $content = ob_get_contents();
    //erase the output turn off output buffering
    ob_end_clean();

    return $content;
}


