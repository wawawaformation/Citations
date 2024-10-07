<?php

require_once dirname(__DIR__, 2) . '/model/users.model.php';

$users = getUsers($pdo);

//echo '<pre>';
//print_r($users);
//echo '</pre>';

//var_dump($users);