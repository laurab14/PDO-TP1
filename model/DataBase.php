<?php
//fichier obligatoire qui sera appelé à plusieurs endroits
class DataBase{
    protected $db;
    public function __construct(){
        $this->db = new PDO ('mysql:host=localhost;dbname=PDO1;charset=utf8', 'pdo','pdo');
    }
}