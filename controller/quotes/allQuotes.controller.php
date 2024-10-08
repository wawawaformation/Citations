<?php

$quotes = getQuotes($pdo);

require_once ROOT . '/view/template/quotes/all.view.php';