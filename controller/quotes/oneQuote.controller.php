<?php

require_once dirname(__DIR__, 2) . '/model/authors.model.php';

if(!isset($_GET['id'])){
    throw new Exception('Id existe pas', 125);
}

$quote = getOneQuote($pdo, $_GET['id']);

var_dump($quote);