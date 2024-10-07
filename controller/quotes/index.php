<?php

require_once ROOT . '/model/quotes.model.php';

if (isset($_GET['action'])){

    switch ($_GET['action']){
        case 'allQuotes':
        case 'oneQuote':
        case 'createQuote':
        case 'updateQuote':
        case 'deleteQuote':
            $action = $_GET['action'];
            break;
        default :
        header ('Location: index.php?controller=404');
    }

}else {
    $action = 'allQuotes';
}

require_once ROOT .'/controller/quotes/' . $action . '.controller.php';