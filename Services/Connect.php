<?php

namespace Services;

class Connect {

    protected $db_name;
    protected $db_user;
    protected $db_pass;
    protected $db_host;

    public function __construct()
    {
        require "./config/config.php";
        $this->db_name = $config["db_name"];
        $this->db_user = $config["db_user"];
        $this->db_pass = $config["db_pass"];
        $this->db_host = $config["db_host"];
    }

    public function getPdo()
    {
        $pdo = new \PDO("mysql:host=$this->db_host;dbname=$this->db_name;charset=utf8", $this->db_user, $this->db_pass);
        $this->pdo = $pdo;
        return $this->pdo;
    }

}

?>