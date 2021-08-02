<?php

namespace MVBuilder\Database;

use MVBuilder\Core\Dev\Env;

class Squil
{
    private $pdo;
    function __construct()
    {
        $host = Env::host;
        $dbname = Env::dbname;
        $user = Env::user;
        $pass = Env::pass;
        $this->pdo = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    }
    public function query(string $query): \PDOStatement | false {
        $sql = $this->pdo->prepare($query);
        return $sql;
    }
    public function execQuery(string $query, array $data): \PDOStatement | false {
        $sql = $this->pdo->prepare($query);
        $sql->execute($data);
        return $sql;
    }
}