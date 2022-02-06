<?php

namespace App\Decorator;

use App\InputUser;


class TextFormat implements InputUser
{

    protected $inputFormat;

    public function __construct(InputUser $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }


    public function formatText(string $text): string
    {
        return $this->inputFormat->formatText($text);
    }
}
