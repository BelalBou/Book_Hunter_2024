<ul class="list-reset">
    <?php
    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAll($connexion);
    foreach ($categories as $category) : ?>
        <li>
            <a class="text-gray-300 hover:text-white" href="?categories=show&id=<?php echo $category['categoryID']; ?>">
                <?php echo $category['name']; ?></a>
        </li>
    <?php endforeach; ?>