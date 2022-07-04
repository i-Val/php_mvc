<?php

namespace App\classes;

class CSRFToken
{
    //generate token
    public static function _token(){
        if(!Session::has('token')){
            $randomToken = base64_encode(openssl_random_pseudo_bytes(32));
            Session::add('token', $randomToken);;
        }
        return Session::get('token');
    }

    //verify token
    public static function verifyCSRFToken($requestToken){
        if(Session::has('token') && Session::get('token') === $requestToken){
            Session::remove('token');
            return true;
        }
        return false;
    }
}
