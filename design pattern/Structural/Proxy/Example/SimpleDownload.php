<?php

namespace App;

class SimpleDownload implements Download
{

    public function download(string $url): string
    {
        return "Downloading a file from the Internet. {$url}\n";
    }
}