<?php

namespace App;

class StringArray
{
    public static function ArrayToString($stringArray):string
    {
        $stringOut = "";
        foreach ($stringArray as $value)
            {
                $stringOut .= $value;
            }
        return $stringOut;
    }
    public static function StringToArray($text):array
    {
        return str_split($text);
    }
}