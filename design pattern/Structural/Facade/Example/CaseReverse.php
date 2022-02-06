<?php

namespace App;

class CaseReverse
{
    protected array $lowerCase =
        array('a', 'b', 'c', 'd', 'e', 'f',
            'g', 'h', 'i', 'j', 'k', 'l',
            'm', 'n', 'o', 'p', 'q', 'r',
            's', 't', 'u', 'v', 'w', 'x',
            'y', 'z');

    protected array $upperCase =
        array('A', 'B', 'C', 'D', 'E', 'F',
            'G', 'H', 'I', 'J', 'K', 'L',
            'M', 'N', 'O', 'P', 'Q', 'R',
            'S', 'T', 'U', 'V', 'W', 'X',
            'Y', 'Z');

    public function caseReverse($stringArray):array
    {
        $strArrOut = array();
        for($i = 0 ;$i < sizeof($stringArray);$i++)
        {
            if(in_array($stringArray[$i],$this->lowerCase))
            {
                $charKey = array_search($stringArray[$i],$this->lowerCase);
                $strArrOut[$i] = $this->upperCase[$charKey];
            }elseif(in_array($stringArray[$i],$this->upperCase))
            {
                $charKey = array_search($stringArray[$i],$this->upperCase);
                $strArrOut[$i] = $this->lowerCase[$charKey];
            }else
            {
                $strArrOut[$i] = $stringArray[$i];
            }

        }
        return $strArrOut;
    }
}