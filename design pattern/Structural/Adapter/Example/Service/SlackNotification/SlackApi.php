<?php

namespace App\Service\SlackNotification;
use App\Notification;
class SlackApi
{
    protected string $userName;
    protected string $passWord;
    protected string $message;

    public function login($userName, $password){
        $this->userName = $userName;
        $this->passWord = $password;

        //some stuff code
        return "login success \n";
    }
    public function sendMessage($string)
    {

       $this->message = $string;
       //some stuff code send
        return "success slack api";
    }
}