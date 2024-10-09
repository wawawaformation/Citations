<?php

$title = 'Erreur 404';
$description = '';

ob_start();
?>

<div class=""><strong>La page demandée n'existe pas.</strong></div>
<div class="row">    
    <div class="col-6"><img src="https://img.freepik.com/vecteurs-premium/modele-web-erreur-404-chat-colere_197582-246.jpg?w=826" alt=""></div>


</div>
<?php
$content = ob_get_clean();
require_once ROOT . '/view/layout.view.php';