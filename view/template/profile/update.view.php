<?php

$title = 'Edition de votre profil';
$description = 'test';
ob_start();
?>
<!--j'ai mis une valeur par defaut en plus -->

<form method="post" action="index.php?controller=profile&action=updateProfile&id=<?= $_GET['id'] ?>">
  <div class="mb-3">
    <label for="firstname" class="form-label">Prénom</label>
    <input value="<?= $user['firstname'] ?>" type="text" class="form-control" id="firstname" name="firstname" required>
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Nom</label>
    <input value="<?= $user['lastname'] ?>" type="text" class="form-control" id="lastname" name="lastname" required>
  </div>
  <div class="mb-3">
    <label for="mail" class="form-label">Mail</label>
    <input value="<?= $user['mail'] ?>" type="email" class="form-control" id="mail" name="mail" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe actuel</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="password_new" class="form-label">Nouveau mot de passe</label>
    <input type="password" class="form-control" id="password_new" name="password_new">
  </div>
  <div class="mb-3">
    <label for="password_confirm" class="form-label">Confirmer votre mot de passe</label>
    <input type="password" class="form-control" id="password_confirm" name="password_confirm">
  </div>
  


  <button type="submit" class="btn btn-primary">Enregistrer</button>

</form>
<?php
$content = ob_get_clean();


require_once ROOT . '/view/layout.view.php';