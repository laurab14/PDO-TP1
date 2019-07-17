<?php 
require 'model/DataBase.php';
require 'model/User.php';

$users = new User();
$userResult = $users->allUser();

if(!empty($_POST['selectForm'])){
$departmentSelect = new User();
$select = (int)$_POST['selectForm'];
$departmentSelect->department = $select;
$selectResult = $departmentSelect->displayUser();
}