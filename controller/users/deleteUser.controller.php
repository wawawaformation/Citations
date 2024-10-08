<?php

require_once ROOT . '/model/users.model.php';

if (!isset($_GET['id'])) {
  throw new Exception("id inexistant", 125);
}

deleteUser($pdo, $_GET['id']);
header('location: index.php?controller=users');

