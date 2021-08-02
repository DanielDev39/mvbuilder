<?php
namespace MVBuilder\Core;

use MVBuilder\Server\Request;
use MVBuilder\Server\Response;

class Api extends Kernel
{
    public string $path;
    public string $method;
    function __construct()
    {
        parent::__construct();
    }
    public function get(string $path, callable $callback, callable | bool $middleware = true){
        if($path === $this->path && $this->method === 'GET'){
            if($middleware(new Request, new Response)){
                $callback(new Request, new Response);
            }
        }
    }
    public function post(string $path, callable $callback, callable | bool $middleware = true){
        if($path === $this->path && $this->method === 'POST'){
            if($middleware(new Request, new Response)){
                $callback(new Request, new Response);
            }
        }
    }
}