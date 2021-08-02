<?php

namespace MVBuilder\Core;

class Kernel {
    public string $path;
    public string $method;

    function __construct()
    {
        if(isset($_GET['url'])){
            $this->path = '/'.$_GET['url'];
        }else {
            $this->path = '/';
        }
        $this->method = strtoupper($_SERVER['REQUEST_METHOD']);
    }
}