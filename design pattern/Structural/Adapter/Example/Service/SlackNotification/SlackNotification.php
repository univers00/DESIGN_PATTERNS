<?php

namespace App\Service\SlackNotification;

use App\Notification;


class SlackNotification implements Notification
{

    protected string $body;
    protected SlackApi $slackApi;
    public function __construct($string, SlackApi $slackApi)
    {
        $this->slackApi = $slackApi;
        $this->body = $string;
    }

    public function sendMessage(): string
    {
        echo $this->slackApi->login("ahmed ahmed","123456798");

        echo $this->slackApi->sendMessage($this->body)."\n";
        return "success slack notification" ."\n";
    }
}