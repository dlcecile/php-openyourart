<?php
//Initialisation des variables
$login = $password = $passwordConfirmation = $mail =  '';
//Regex si nécessaire
$regexlogin = "/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÇÈÉÊÀ0123456789\^\$\\\|\{\}\[\]\(\)\?\#\!\+\*\.&_~`:;%µ¨£@¤\"'-]{3,9}$/";
$regexpassword = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8}$/";
$regexmail = "/^[\wáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÇÈÉÊÀ.-]+@([\wáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÇÈÉÊÀ.-]{3,})\.([a-z]{2,3})$/";
//tableau d'erreur
$errors = [];
//Initialisation du bouton  qui soumet du formulaire
$formSubmitted = false;
// If the server register a post request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formSubmitted = true;
    // Contrôle que les informations saisies soit bonnes et que si elles sont fausses un message d'erreurs s'inscrit
    //Contrôle du login
    $login = trim(filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING));
    if (empty($login)) {
        $errors['login'] = 'Veuillez renseigner un pseudo.';
    } elseif (!preg_match($regexlogin, $login)) {
        $errors['login'] = 'Votre pseudonyme doit contenir entre 4 et 10 caractères maximum et il doit commencer par un lettre';
    }
    //Contrôle du mot de passe
      $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
    if (empty($password)) {
        $errors['password'] = 'Veuillez renseigner un pseudo.';
    } elseif (!preg_match($regexpassword, $password)) {
        $errors['password'] = 'Votre mot de passe doit contenir 8 caractères comprenant 1 masjuscule, 1 minuscule, 1 caractère spécial et 1 chiffre';
    }
    //Contrôle de la confirmation du mot de passe
        $passwordConfirmation = trim(filter_input(INPUT_POST, 'passwordConfirmation', FILTER_SANITIZE_STRING));
    if (empty($passwordConfirmation)) {
        $errors['passwordConfirmation'] = 'Veuillez renseigner un pseudo.';
    } elseif (!preg_match($regexpassword, $passwordConfirmation)) {
        $errors['passwordConfirmation'] = 'Votre mot de passe doit contenir 8 caractères comprenant 1 masjuscule, 1 minuscule, 1 caractère spécial et 1 chiffre';
    }
    //Contrôle de l'adresse email
  $mail = trim(htmlspecialchars($_POST['mail']));
    if (empty($mail)) {
        $errors['mail'] = 'Veuillez renseigner votre email';
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errors['mail'] = 'L\' email  n\'est pas valide!';
    }elseif (!preg_match($regexmail, $mail)) {
        $errors['mail'] = 'Votre adresse email doit contenir un format valide';
    }
}
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
    </head>
    <body>
        <form method="POST" action="index.php" class="formParts" novalidate>
    <div class="form-group row">
           <label for="login" class="col-form-label col-2">Pseudo</label>
        <input id="login" name="login" type="text" value="<?= $login ?>" class="form-control col-8" placeholder="Pseudonyme">
          <span class="text-danger"><?= ($errors['login']) ?? '' ?></span>
    </div>
    <div class="form-group row">
        <label for="password" class="col-form-label col-2">Mot de passe</label>
        <input id="password" name="password" type="password" value="<?= $password ?>" class="form-control col-8" placeholder="Saisir un mot de passe comprenant 8 caractères">
    <span class="text-danger"><?= ($errors['password']) ?? '' ?></span>
    </div>
    <div class="form-group row">
        <label for="passwordConfirmation" class="col-form-label col-2">Confirmation de mot de passe :</label>
        <input id="passwordConfirmation" name="passwordConfirmation" type="text" value="<?= $passwordConfirmation ?>"  class="form-control col-8" placeholder="Saisir de nouveau le mot de passe">
          <span class="text-danger"><?= ($errors['passwordConfirmation']) ?? '' ?></span>
    </div>
    <div class="form-group row">
        <label for="mail" class="col-form-label col-2">Adresse mail:</label>
        <input id="mail" name="mail" type="text" value="<?= $mail ?>"  class="form-control col-8" placeholder="maxmario@gmail.com">
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