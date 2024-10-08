<?php

$title = 'Erreur 404';
$desciption='';



$content = '<div class="row">' . PHP_EOL;
$content .= '<div class="col-6"><img src="https://1wpserveur-1278.kxcdn.com/wp-content/uploads/2023/07/13315300_5203299.jpg.webp" alt="" width="100%"></div>';
$content .= '<div class="col-6">La page demandée n\'exite pas</div>';
$content .= '</div>';

require_once ROOT . '/view/layout.view.php';