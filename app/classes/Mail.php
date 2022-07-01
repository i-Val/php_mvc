<?php

namespace App\classes;

//use PHPMailer;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail
{
    protected $mail;

    public function __construct(){
        $this->mail = new PHPMailer;
        $this->setUp();
    }

    public function setup(){
        $this->mail->isSMTP();
        $this->mail->Mailer = 'smtp';
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = 'tls';

        $this->mail->Host = $_ENV['SMTP_HOST'];
        $this->mail->Port = $_ENV['SMTP_PORT'];

        $environment = $_ENV['APP_ENV'];

        if($environment === 'local'){
            $this->mail->SMTPDebug = 2;
        }

        //auth info
        $this->mail->Username = $_ENV['EMAIL_USERNAME'];
        $this->mail->Password = $_ENV['EMAIL_PASSWORD'];

        $this->mail->isHTML(true);
        $this->mail->SingleTo = true;

        //sender info
        $this->mail->From = $_ENV['EMAIL_USERNAME'];
        $this->mail->FromName = 'entropy';
    }

    public function send($data){
        $this->mail->addAddress($data['to'], $data['name']);
        $this->mail->Subject = $data['subject'];
        $this->mail->Body = make($data['view'], array('data'=> $data['body']));
        return $this->mail->send();
    }
}
