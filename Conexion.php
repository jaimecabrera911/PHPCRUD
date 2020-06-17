<?php

class Conexion {

    protected $db;
    private $driver = "mysql";
    private $host = "localhost";
    private $dbname = "notas";
    private $username = "root";
    private $passw = "root";

    function __construct() {
        try {
             $db = new PDO("{$this->driver}:host={$this->host}:dbname={$this->dbname}", $this->username, $this->passwd);
             $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }

}
