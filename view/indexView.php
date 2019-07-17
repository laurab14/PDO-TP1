<?php 
require 'controller/indexController.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Index view</title>
</head>

<body>
    <?php require 'navbarView.php';?>
    <form method="POST" action="">
        <select name="selectForm" class="form-control">
            <option value="" selected disabled>Sélectionner un service</option>
            <option value="1">Maintenance</option>
            <option value="2">Web développeur</option>
            <option value="3">Web designer</option>
            <option value="4">Référenceur</option>
        </select>
        <input type="submit" value="Valider" name="validSelect" />
    </form>
    <?php
    if(empty($_POST['selectForm'])){
        ?>
    <?php foreach ($userResult as $value){
        ?>
    <ul>
        <li><?= $value['lastName']?></li>
        <li><?= $value['firstName']?></li>
        <li><?= $value['birthDate']?></li>
        <li><?= $value['adress']?></li>
        <li><?= $value['phone']?></li>
        <li><?= $value['department']?></li>
    </ul>
    <?php
    }
    ?>
    <?php
       }else{
           ?>
        <?php
           foreach ($selectResult as $value){
               ?>
        <ul>
            <li><?= $value['lastName']?></li>
            <li><?= $value['firstName']?></li>
            <li><?= $value['birthDate']?></li>
            <li><?= $value['adress']?></li>
            <li><?= $value['phone']?></li>
            <li><?= $value['department']?></li>
        </ul>
        <?php
           }
           ?>
    <?php
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>