<?php
require 'controller/userController.php'; 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="index.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="lastName">Nom</label>
                <input type="text" class="form-control" name="lastName" placeholder="Noury" />
            </div>
            <div class="form-group col-md-6">
                <label for="firstName">Prénom</label>
                <input type="text" class="form-control" name="firstName" placeholder="Morgane" />
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate">Date de naissance</label>
            <input type="date" class="form-control" name="birthDate" placeholder="18/10/1992" />
        </div>
        <div class="form-group">
            <label for="adress">Addresse</label>
            <input type="text" class="form-control" name="adress" placeholder="1 rue des Capucine Saint Maclou" />
        </div>
        <div class="form-group">
            <label for="zipCode">Code postal</label>
            <input type="text" class="form-control" name="zipCode" placeholder="27000" />
        </div>
        <div class="form-group">
            <label for="phone">Téléphone</label>
            <input type="text" class="form-control" name="phone" placeholder="0611237345" />
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="department">Numéro de service</label>
                <select name="department" class="form-control">
                    <?php
for($i = 1; $i <= 4; $i++){
    ?>
                    <option value="<?=$i?>"><?=$i?></option>
                    <?php
}  
?>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
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