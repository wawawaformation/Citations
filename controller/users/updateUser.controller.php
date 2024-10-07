<?php

require_once ROOT . '/model/users.model.php';

if (!isset($_GET['id'])) {
    throw new Exception('id inexistant', 125);
}
$data = [
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'password' => $_POST['password'],
    'mail' => $_POST['mail'],
    'token' => $_POST['token'],
];

$updateUser = updateUser($pdo, $data, $_GET['id']);



// var_dump ($updateUser);
