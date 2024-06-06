<div class="pb-4">
    <?php
    foreach ($tags as $tag) : ?>
        <span class="bg-gray-500 text-white px-3 py-1 rounded-full text-sm font-semibold mr-2">
            <?php echo $tag['tag_name']; ?>
        </span>
    <?php endforeach; ?>
</div>