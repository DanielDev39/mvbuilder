<?php 
namespace MVBuilder\Server;

class Response {
    public function send(string $response): void {
        echo $response;
    }
    public function json(array | object $response): void {
        echo json_encode($response);
    }
    public function status(int $code): void {
        http_response_code($code);
    }
}