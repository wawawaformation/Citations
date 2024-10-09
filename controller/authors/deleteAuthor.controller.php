<?php 
if (!isset($_GET['id'])){
    throw new Exception('cet id n\'existe pas', 125);
}
deleteAuthor($pdo,$_GET['id']);

header ('Location: index.php?controller=authors');
