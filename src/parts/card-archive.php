<?php
$title = $args["title"] ?? ""; // string
$categorys = $args["categorys"] ?? ""; // array
$href = $args["href"] ?? ""; // string
$images = $args["images"] ?? [];

// array
?>

<article class="card-archive">
  <a href="<?= $href ?>" class="card-archive__link">
    <p class="card-archive__thumbnail">
      <?php if ($images["src"]): ?>
        <img src="<?= $images["src"] ?>" width="600" height="400" decoding="async" alt="<?= $images["alt"] ?>">
      <?php else: ?>
        <img src="<?= vite_src_images("noimage.jpg") ?>" width="800" height="560" decoding="async" alt="">
      <?php endif; ?>
    </p>
    <div class="card-archive__category">
      <?php get_template_part("./parts/label-category", null, [
          "slug" => $categorys["slug"],
          "name" => $categorys["name"],
      ]); ?>
    </div>
    <h2 class="card-archive__title"><?= $title ?></h2>
  </a>
</article>