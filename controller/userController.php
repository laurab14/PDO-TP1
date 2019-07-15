<?php
//il faut tjrs appeler la base de donnée dans le controller
require 'model/DataBase.php';
require 'model/User.php';

if(count($_POST) > 0){
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $birthDate = $_POST['birthDate'];
    $adress = $_POST['adress'];
    $zipCode = $_POST['zipCode'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    //objet qui contient les attributs et les méthodes de la class User
    $user = new User();
    $user->lastName= $lastName;
    $user->firstName = $firstName;
    $user->birthDate = $birthDate;
    $user->adress = $adress;
    $user->zipCode = $zipCode;
    $user->phone = $phone;
    $user->department = $department;
    if($user->addUser()){
        header('Location: index.php');
    }
}