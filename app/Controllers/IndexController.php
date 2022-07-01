<?php

namespace App\Controllers;

use App\classes\Mail;

class IndexController extends Controller
{
    public function show(){
       // echo "Homepage of controller class!";
        $mail = new Mail();

        $data = [
            'to'=> 'valentine4d@gmail.com',
            'subject'=> 'hello from Silicon Mountain',
            'view'=> 'welcome',
            'name'=> 'John Doe',
            'body'=> 'Testing...'
        ];

        if($mail->send($data)){
            echo 'email sent successfully';
        }else{
            echo 'sending failed';
        }
    }
}
