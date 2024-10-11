<?php

require_once ROOT . '/model/users.model.php';

if(!isset($_GET['id'])){
    throw new Exception('id inexistant', 125);
}

$user = getUserById($pdo, $_GET['id']);

require_once ROOT . '/view/template/profile/home.view.php';
