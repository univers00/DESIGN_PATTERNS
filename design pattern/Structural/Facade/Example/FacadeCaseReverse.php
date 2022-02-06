<?php

namespace App;

class FacadeCaseReverse
{
public static function reverseCase($text)
{
    $textArray = stringArray::StringToArray($text);
    var_dump($textArray);
    $caseChange = new CaseReverse();
    return $text = stringArray::ArrayToString($caseChange->caseReverse($textArray));

}
}