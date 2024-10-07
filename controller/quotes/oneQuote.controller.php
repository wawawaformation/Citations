<?php

if(!isset($_GET['id'])){
    throw new Exception('Id existe pas', 125);
}

$quote = getOneQuote($pdo, $_GET['id']);

var_dump($quote);