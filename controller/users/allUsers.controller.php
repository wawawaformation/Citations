<?php

require_once ROOT . '/model/users.model.php';

$users = getUsers($pdo);
//test affichage message
if (isset($_SESSION['flash_msg'])) {
  $_SESSION['msg'] = $_SESSION['flash_msg'];
  unset($_SESSION['flash_msg']);
}
require_once ROOT . '/view/template/users/all.view.php';

