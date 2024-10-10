<?php

require_once ROOT . '/model/authors.model.php';
$authors = getAuthors($pdo);

require_once ROOT . '/model/quotes.model.php';

if(isset($_GET['id'], $_POST['quote'], $_POST['authors_id'], $_POST['explanation'])){
    if(updateQuote($pdo, [
        'quote'=> $_POST['quote'],
        'authors_id'=> ($_POST['authors_id'] == 0) ? NULL : $_POST['authors_id'],
        'explanation'=> (empty($_POST['explanation'])) ? NULL : $_POST['explanation']
    ], $_GET['id']
    )){
    $_SESSION['msg'] = [
        'code'=> 'success',
        'text'=> 'La citation a bien été modifier.'
    ];
}else{
    $_SESSION['msg'] = [
        'code'=> 'warning',
        'text'=> 'La citation n\'a pas pu être modifier.'
    ];
    
}
    header('Location: index.php?controller=quotes');
}



require_once ROOT .'/view/template/quotes/update.view.php';