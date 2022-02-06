<?php

namespace App\Bridge;

use App\Render\Render;

class SimplePage extends Page
{
protected string $title;
protected string $content;

public function __construct(Render $render,$title, $content)
{
    parent::__construct($render);
    $this->title = $title;
    $this->content = $content;
}

public function view():string
{
    return $this->render->renderParts([
        $this->render->renderTitle($this->title),
        $this->render->renderTextBlock($this->content),

    ]);
}
}