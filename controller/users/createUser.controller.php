<?php

require_once ROOT . '/model/users.model.php';

if(isset($_POST['firstname'], $_POST['lastname'], $_POST['mail'], $_POST['password'])){
    if(createUser($pdo, [
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'mail' => $_POST['mail'],
        'password' => password_hash($_POST ['password'], PASSWORD_DEFAULT),
    ])){
        header('location: index.php?controller=users');
    };
}

require_once ROOT . '/view/template/users/create.view.php';


