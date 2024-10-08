<?php
if(!isset($_GET['id'])){
    throw new Exception('Id existe pas', 125);
}

$quote = getOneQuote($pdo, $_GET['id']);

require_once ROOT .'/view/template/quotes/one.view.php';