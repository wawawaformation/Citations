<?php

require_once ROOT . '/model/users.model.php';

$users = getUsers($pdo);

//echo '<pre>';
//print_r($users);
//echo '</pre>';

//var_dump($users);