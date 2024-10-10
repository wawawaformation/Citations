<?php

$title = 'Liste des utilisateurs';
$description = 'test';
ob_start();
?>

<dl>
  <dt>prenom</dt>
  <dd><?= $user['firstname'] ?></dd>
  <dt>nom</dt>
  <dd><?= $user['lastname'] ?></dd>
  <dt>mail</dt>
  <dd><?= $user['mail'] ?></dd>
  <dt>date de creation</dt>
  <dd><?= $user['created'] ?></dd>
</dl>
<a href="index.php?controller=users&action=updateUser&id=<?= $_GET['id'] ?>">
  <i class="bi bi-pen-fill"></i></a>
<a href="index.php?controller=users&action=deleteUser&id=<?= $_GET['id'] ?>"
  onclick="return confirm('Es-tu sûr de vouloir supprimer cette citation ?');">
  <i class="bi bi-trash-fill"></i></a>

<?php

$content = ob_get_clean();


require_once ROOT . '/view/layout.view.php';
