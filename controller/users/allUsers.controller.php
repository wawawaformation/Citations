<?php

require_once ROOT . '/model/users.model.php';

$users = getUsers($pdo);

require_once ROOT . '/view/template/users/all.view.php';