<?php

require_once ROOT . '/model/users.model.php';

if(!empty($_POST['mail'])){

$data = [
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'password' => $_POST['password'],
    'mail' => $_POST['mail'],
    'token' => $_POST['token'],
];

$createUser = createUser($pdo, $data);

};



