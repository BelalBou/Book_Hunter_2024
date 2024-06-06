<?php

if (isset($_GET['books'])) :
    include_once '../app/routers/books.php';

elseif (isset($_GET['authors'])) :

    include_once '../app/routers/authors.php';

elseif (isset($_GET['categories'])) :

    include_once '../app/routers/categories.php';

elseif (isset($_GET['tags'])) :

    include_once '../app/routers/tags.php';

else :
    include_once '../app/controllers/pageController.php';
    \App\Controllers\PageController\homeAction($connexion);
endif;
