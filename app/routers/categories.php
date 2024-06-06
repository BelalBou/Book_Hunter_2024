<?php

use \App\Controller\CategoriesController;

include_once '../app/controllers/categoriesController.php';

switch ($_GET['categories']):
    case 'show';
        CategoriesController\showAction($connexion, $_GET['id']);
        break;

endswitch;
