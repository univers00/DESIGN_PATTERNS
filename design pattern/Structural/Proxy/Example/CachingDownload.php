<?php
namespace App;



class CachingDownload implements Download
{

    private array $cache = [];
    private Download $download;
    public function __construct(SimpleDownload $download)
    {
        $this->download = $download;
    }

    public function download(string $url): string
    {
       if(isset($this->cache[$url]))
       {
           echo "From caching =>";
           return $this->cache[$url];
       }else
       {
           $result = $this->download->download($url);
            $this->cache[$url] = $result;
           return $result;
       }
    }
}