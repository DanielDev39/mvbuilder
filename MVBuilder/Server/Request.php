<?php
namespace MVBuilder\Server;

class Request
{
    public $body;
    public $formData;
    public $qs;

    function __construct()
    {
        $this->body = json_decode(file_get_contents('php://input', true));
        if(strtoupper($_SERVER['REQUEST_METHOD']) === 'POST'){
            $this->formData = $_POST;
        }
        $this->qs = $_GET;
    }

}