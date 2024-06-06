<?php

use \App\Controller\TagsController;

include_once '../app/controllers/tagsController.php';

switch ($_GET['tags']):
    case 'show';
        tagsController\showAction($connexion, $_GET['id']);
        break;

endswitch;
