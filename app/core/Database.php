<?php

namespace app\core;

use PDO;

class Database{
    public $pdo;
    private $host = 'localhost';
    private $user = 'cy98094_db';
    private $password = 'a1L7nFny';
    private $db_name = 'cy98094_db';

    public function __construct(){
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user, $this->password);
    }

}