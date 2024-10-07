<?php

require_once ROOT . '/model/users.model.php';

if(!isset($_GET['id'])){
    throw new Exception('id inexistant', 125);
}

$user = getUserById($pdo, $_GET['id']);



echo '<pre>';
print_r($user);
echo '</pre>';

//var_dump($user);