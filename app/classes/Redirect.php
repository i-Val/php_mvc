<?php

namespace App\classes;

class Redirect
{
    //redirect to a specific page
    public static function to($url){
        header("Location: $url");
    }

    //  redirect to same page
    public static function back(){
        $uri = $_SERVER['REQUEST_URI'];

        header("Location: $uri");
    }
}
