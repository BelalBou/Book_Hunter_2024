<div class="tag-cloud">
    <?php include_once '../app/models/tagsModel.php';
    $tags = \App\Models\TagsModel\findAll($connexion);
    foreach ($tags as $tag) : ?>
        <a class="text-gray-300 hover:text-white text-sm" href="?tags=show&id=<?php echo $tag['tagID']; ?>"><?php echo $tag['tag_name']; ?></a>
    <?php endforeach; ?>
</div>