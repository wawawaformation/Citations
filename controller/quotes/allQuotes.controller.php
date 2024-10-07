<?php

require_once dirname(__DIR__, 2) . '/model/quotes.model.php';

$quotes = getQuotes($pdo);

var_dump($quotes);