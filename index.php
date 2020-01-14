<?php
include 'validation-form.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="assets/css/style.css">
  <title>Page d'accueil formulaire</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row userArea">
            <div id="tabsInscription">
 <!-- Bouton inscription-->
<p class="mindInscription">Si vous êtes un artiste étudiant à la faculté d'art d'Amiens vous pouvez créer votre espace.</p>
<button type="button" class="btn inscription" data-toggle="modal" data-target="#inscriptionModalCenter">
  Inscription
</button>
 
<!-- Modal  inscription-->
<div class="modal fade" id="inscriptionModalCenter" tabindex="-1" role="dialog" aria-labelledby="inscriptionModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            </div>
            <div class="tabsConnexion">
    <!-- Bouton connexion-->
<button type="button" class="btn connexion" data-toggle="modal" data-target="#connexionModalCenter">
 Connexion
</button>
            </div>
    <!--Fin container du formulaire-->
    </div>
</div>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
