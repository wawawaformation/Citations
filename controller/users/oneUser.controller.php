<?php



if(!isset($_GET['id'])){
    throw new Exception('id inexistant', 125);
}

$user = getUserById($pdo, $_GET['id']);


require_once ROOT . '/view/template/users/one.view.php';