<?php

require_once ROOT . '/model/users.model.php';

if (!isset($_GET['id'])) {
  throw new Exception("id inexistant", 125);
}
// modif interpretation
if (deleteUser($pdo, $_GET['id'])) {
  $_SESSION['flash_msg'] = [
    'code' => 'success',
    'text' => 'L\'utilisateur a bien été supprimé.'
  ];
} else {
  $_SESSION['flash_msg'] = [
    'code' => 'danger',
    'text' => 'L\'utilisateur n\'a pas été supprimé.'
  ];
}
header('location: index.php?controller=users');

