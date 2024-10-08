<?php

if(isset($_POST['quote'], $_POST['authors_id'], $_POST['explanation'])){
    createQuote($pdo, [
        'quote'=> $_POST['quote'],
        'authors_id'=> $_POST['authors_id'],
        'explanation'=> (empty($_POST['explanation'])) ? NULL : $_POST['explanation']
    ]);
    header('Location: index.php?controller=quotes');
}

require_once ROOT . '/model/authors.model.php';

$authors = getAuthors($pdo);


require_once ROOT . '/view/template/quotes/create.view.php'
?>
