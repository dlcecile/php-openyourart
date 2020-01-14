<?php
include 'validation-form.php';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Formulaire</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel ="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <h1>OpenYourArt</h1>
        <form method="POST" action="index.php" class="formParts" novalidate>
    <div class="form-group row">
           <label for="login" class="col-form-label col-2">Pseudo</label>
        <input id="login" name="login" type="text" value="<?= $login ?>" class="form-control col-5" placeholder="Pseudonyme">
          <span class="text-danger"><?= ($errors['login']) ?? '' ?></span>
          <span class="text-success"><?= ($confirmed['login']) ?? '' ?></span>
    </div>
    <div class="form-group row">
        <label for="password" class="col-form-label col-2">Mot de passe</label>
        <input id="password" name="password" type="password" value="<?= $password ?>" class="form-control col-5" placeholder="Saisir un mot de passe comprenant 8 caractères">
    <span class="text-danger"><?= ($errors['password']) ?? '' ?></span>
    </div>
    <div class="form-group row">
        <label for="passwordConfirmation" class="col-form-label col-2">Confirmation de mot de passe :</label>
        <input id="passwordConfirmation" name="passwordConfirmation" type="text" value="<?= $passwordConfirmation ?>"  class="form-control col-5" placeholder="Saisir de nouveau le mot de passe">
          <span class="text-danger"><?= ($errors['passwordConfirmation']) ?? '' ?></span>
          <span class="text-warning"><?= ($notUniform['passwordConfirmation']) ?? '' ?></span>
          <span class="text-success"><?= ($confirmed['passwordConfirmation']) ?? '' ?></span>
    </div>
    <div class="form-group row">
        <label for="mail" class="col-form-label col-2">Adresse mail:</label>
        <input id="mail" name="mail" type="text" value="<?= $mail ?>"  class="form-control col-5" placeholder="maxmario@gmail.com">
        <span class="text-danger"><?= ($errors['mail']) ?? '' ?></span>
    </div>
    <div class="form-group row justify-content-center">
        <input type="submit" value="Inscription" class="btn btn-success">
    </div>
</form> 
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </body>
</html>