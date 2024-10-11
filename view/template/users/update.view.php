<?php

$title = 'Edition d\'un utilisateur';
$description = 'test';
ob_start();
?>
<!--j'ai mis une valeur par defaut en plus -->
<div class="text">Veuillez remplir tous les champs*</div>
<form method="post" action="index.php?controller=users&action=updateUser&id=<?= $_GET['id'] ?>">
  <div class="mb-3">
    <label for="firstname" class="form-label">Prénom*</label>
    <input value="<?= $user['firstname'] ?>" type="text" class="form-control" id="firstname" name="firstname" required>
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Nom*</label>
    <input value="<?= $user['lastname'] ?>" type="text" class="form-control" id="lastname" name="lastname" required>
  </div>
  <div class="mb-3">
    <label for="mail" class="form-label">Mail*</label>
    <input value="<?= $user['mail'] ?>" type="email" class="form-control" id="mail" name="mail" required>
  </div>



  <button type="submit" class="btn btn-primary">Enregistrer</button>

</form>
<?php
$content = ob_get_clean();


require_once ROOT . '/view/layout.view.php';