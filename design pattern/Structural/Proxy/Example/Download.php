<?php

namespace App;

interface Download
{
    public function download(string $url):string;
}