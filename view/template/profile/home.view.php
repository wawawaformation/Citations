<?php

$title = 'Profil';
$description = 'test';
ob_start();
?>

<dl>
  <dt>Prénom</dt>
  <dd><?= ucfirst($user['firstname']) ?></dd>
  <dt>Nom</dt>
  <dd><?= strtoupper($user['lastname']) ?></dd>
  <dt>Mail</dt>
  <dd><?= $user['mail'] ?></dd>
  <dt>Date de création</dt>
  <dd><?= $user['created'] ?></dd>
</dl>
<a href="index.php?controller=profile&action=updateProfile&id=<?= $_GET['id'] ?>">
  <i class="bi bi-pen-fill"></i></a>
<a href="index.php?controller=profile&action=updateProfile&id=<?= $_GET['id'] ?>"
  onclick="return confirm('Es-tu sûr de vouloir supprimer ce profil ?');">
  <i class="bi bi-trash-fill"></i></a>

<?php

$content = ob_get_clean();


require_once ROOT . '/view/layout.view.php';