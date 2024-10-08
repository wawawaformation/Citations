<?php
if(!isset($_GET['id'])){
    throw new Exception('id inexistant', 125);
}



deleteUser($pdo, $_GET['id']);
header('Location: index.php?controller=users');