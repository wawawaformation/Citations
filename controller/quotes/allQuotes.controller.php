<?php

require_once ROOT . '/model/quotes.model.php';

$quotes = getQuotes($pdo);

var_dump($quotes);