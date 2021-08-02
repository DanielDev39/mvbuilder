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
    public function head(string $path, callable $callback, callable | bool $middleware = true){
        if($path === $this->path && $this->method === 'HEAD'){
            if($middleware(new Request, new Response)){
                $callback(new Request, new Response);
            }
        }
    }
    public function put(string $path, callable $callback, callable | bool $middleware = true){
        if($path === $this->path && $this->method === 'PUT'){
            if($middleware(new Request, new Response)){
                $callback(new Request, new Response);
            }
        }
    }
    public function delete(string $path, callable $callback, callable | bool $middleware = true){
        if($path === $this->path && $this->method === 'DELETE'){
            if($middleware(new Request, new Response)){
                $callback(new Request, new Response);
            }
        }
    }
    public function connect(string $path, callable $callback, callable | bool $middleware = true){
        if($path === $this->path && $this->method === 'CONNECT'){
            if($middleware(new Request, new Response)){
                $callback(new Request, new Response);
            }
        }
    }
    public function options(string $path, callable $callback, callable | bool $middleware = true){
        if($path === $this->path && $this->method === 'OPTIONS'){
            if($middleware(new Request, new Response)){
                $callback(new Request, new Response);
            }
        }
    }
    public function trace(string $path, callable $callback, callable | bool $middleware = true){
        if($path === $this->path && $this->method === 'TRACE'){
            if($middleware(new Request, new Response)){
                $callback(new Request, new Response);
            }
        }
    }
    public function patch(string $path, callable $callback, callable | bool $middleware = true){
        if($path === $this->path && $this->method === 'PATCH'){
            if($middleware(new Request, new Response)){
                $callback(new Request, new Response);
            }
        }
    }
}