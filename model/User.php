<?php
//la class User qui hérite de DataBase.php (DataBase)
class User extends DataBase{
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $adress;
    public $zipCode;
    public $phone;
    public $department;
    public function __construct(){
        //On récupere le constructeur de la page DataBase.php qui est le parent de la class User
        parent::__construct();
    }
    public function addUser(){
        $query = "INSERT INTO `user`(`lastName`, `firstName`, `birthDate`, `adress`, `zipCode`, `phone`, `department`) VALUES (:lastName, :firstName, :birthDate, :adress, :zipCode, :phone, :department)";
        // création de la variable $addUser qui nous a permis de préparer la requête
        $addUser = $this->db->prepare($query);
        $addUser->bindValue(':lastName', $this->lastName,PDO::PARAM_STR);
        $addUser->bindValue(':firstName', $this->firstName,PDO::PARAM_STR);
        $addUser->bindValue(':birthDate', $this->birthDate,PDO::PARAM_STR);
        $addUser->bindValue(':adress', $this->adress,PDO::PARAM_STR);
        $addUser->bindValue(':zipCode', $this->zipCode,PDO::PARAM_STR);
        $addUser->bindValue(':phone', $this->phone,PDO::PARAM_STR);
        $addUser->bindValue(':department', $this->department,PDO::PARAM_INT);
        if($addUser->execute()){
            return true;
        }
    }
    public function displayUser(){
        $query = "SELECT * FROM `user` INNER JOIN department ON department.id = user.department WHERE department = :id";
        // création de la variable $addUser qui nous a permis de préparer la requête
        $addUser = $this->db->prepare($query);
        $addUser->bindValue(':id', $this->department, PDO::PARAM_INT);
        $addUser->execute();
        $addUserFetch = $addUser->fetchAll(PDO::FETCH_ASSOC);
        return $addUserFetch;
    }
    public function allUser(){
        $query = "SELECT * FROM `user` INNER JOIN department ON department.id = user.department";
        // création de la variable $addUser qui nous a permis de préparer la requête
        $addUser = $this->db->prepare($query);
        $addUser->execute();
        $addUserFetch = $addUser->fetchAll(PDO::FETCH_ASSOC);
        return $addUserFetch;
    }
}