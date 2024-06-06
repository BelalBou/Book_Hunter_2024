<div class="bg-gray-700 rounded-lg shadow-lg p-4">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/3 px-1 lg:px-4 mb-4">

            <img class="w-full h-auto rounded-lg" src="<?php echo $book['cover'] ?>" alt="livre" />
        </div>
        <div class="w-full lg:w-2/3 px-1 lg:px-4 mb-4">

            <h2 class="font-bold text-2xl mb-2"><?php echo $book['title'] ?></h2>
            <p class="text-gray-300 mb-4">
                Par
                <a href="author.html" class="hover:text-red-500 underline font-medium"><?php echo $book['author_name'] ?></a>
            </p>
            <p class="text-gray-300 mb-4"><?php echo $book['publicated_at'] ?></p>
            <p class="text-gray-300 mb-4"><?php echo $book['category_name'] ?></p>
            <div class="flex items-center mb-4">
                <span class="text-yellow-500 mr-1">
                    <i class="fas fa-star"></i>
                </span>
                <span><?php echo $book['note'] ?></span>
            </div>
            <div class="flex flex-wrap">
                <?php $tags = \App\Models\TagsModel\findAllByBookId($connexion, $book['bookID']);
                include '../app/views/pages/tags/_index.php'; ?>
            </div>
            <a href="#" class="inline-block mt-4 bg-red-500 hover:bg-red-800 rounded-full px-4 py-2 text-white">
                Ajouter à ma collection
            </a>
        </div>
    </div>
    <div>
        <h3 class="font-bold text-lg mb-2">Résumé</h3>
        <p class="text-gray-300"><?php echo $book['resume'] ?></p>
    </div>
</div>