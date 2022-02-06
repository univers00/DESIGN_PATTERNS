<?php

namespace App\Service;

use App\Notification;

class EmailNotification implements Notification
{
    protected string $from;
    protected string $to;
    protected string $object;
    protected string $body;

    /**
     * @param string $from
     * @param string $to
     * @param string $object
     * @param string $body
     */
    public function __construct(string $from, string $to, string $object, string $body)
    {
        $this->from = $from;
        $this->to = $to;
        $this->object = $object;
        $this->body = $body;
    }

    public function sendMessage(): string
    {

        return "success email"."\n";
    }
}