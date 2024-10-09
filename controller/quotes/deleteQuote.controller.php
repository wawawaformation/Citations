<?php

require_once ROOT . '/model/quotes.model.php';

if(!isset($_GET['id'])){
    throw new Exception('Id introuvable', 125);
}

if(deleteQuote($pdo, $_GET['id'])){
    $_SESSION['msg'] = [
        'code'=> 'success',
        'text'=> 'La citation a bien été supprimée.'
    ];
}else{
    $_SESSION['msg'] = [
        'code'=> 'warning',
        'text'=> 'La citation n\'a pas pu être supprimée.'
    ];

}
header('Location: index.php?controller=quotes');

