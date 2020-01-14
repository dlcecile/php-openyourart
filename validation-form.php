<?php
//Initialisation des variables
$login = $password = $passwordConfirmation = $mail =  '';
//Regex si nécessaire
$regexlogin = "/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÇÈÉÊÀ0123456789\^\$\\\|\{\}\[\]\(\)\?\#\!\+\*\.&_~`:;%µ¨£@¤\"'-]{3,9}$/";
$regexpassword = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8}$/";
$regexmail = "/^[\wáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÇÈÉÊÀ.-]+@([\wáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÇÈÉÊÀ.-]{3,})\.([a-z]{2,3})$/";
//tableau d'erreur
$errors = [];
//Tableau des champs  non identiques;
$notUniform = [];
//Initialisation du bouton  qui soumet du formulaire
$formSubmitted = false;
// If the server register a post request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formSubmitted = true;
    // Contrôle que les informations saisies soit bonnes et que si elles sont fausses un message d'erreurs s'inscrit
    //Contrôle du login
    $login = trim(filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING));
    if (empty($login)) {
        $errors['login'] = 'Veuillez renseigner un identifiant.';
    } elseif (!preg_match($regexlogin, $login)) {
        $errors['login'] = 'L\'identifiant doit contenir entre 4 et 10 caractères maximum et il doit commencer par un lettre';
    }
    //Contrôle du mot de passe
      $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
    if (empty($password)) {
        $errors['password'] = 'Veuillez renseigner un mot de passe.';
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
    else if($_POST['password'] != $_POST['passwordConfirmation']){
        $notUniform['passwordConfirmation'] = 'les mots de passe ne sont pas identiques';
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