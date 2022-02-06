<?php
namespace App;
use App\Decorator\DangerousHtmlTagsFilter;
use App\Decorator\MarkdownFormat;
use App\Decorator\PlainTextFilter;
use App\Decorator\TextFormat;

require_once (__DIR__."/../vendor/autoload.php");

$dangerousComment = <<<HERE
Hello! Nice blog post!
Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;





$inputTextFormat = new TextFormat(new TextInput);

echo $inputTextFormat->formatText($dangerousComment);

echo "\n\n\n";

$inputDangerous = new DangerousHtmlTagsFilter($inputTextFormat);

echo $inputDangerous->formatText($dangerousComment);

echo "\n\n\n";

$inputMark = new MarkdownFormat($inputTextFormat);

echo $inputMark->formatText($dangerousComment);

echo "\n\n\n";

$inputFilter = new PlainTextFilter($inputTextFormat);

echo $inputTextFormat->formatText($dangerousComment);



