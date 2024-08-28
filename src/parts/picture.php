<?php
$images = $args["images"] ?? []; // ["src" => "", "width" => "", "height" => "", "alt" => "", loading => "lazy"]
$lazy = $args["lazy"] ?? false;
$className = $args["className"] ?? "";
?>

<picture>
  <?php if (IS_TYPE === "production"): ?>
    <source srcset="<?= vite_src_images($images["src"], "avif") ?>" type="image/avif" />
  <?php endif; ?>
  <img
    src="<?= vite_src_images($images["src"]) ?>"
    width="<?= $images["width"] ?>"
    height="<?= $images["height"] ?>"
    alt="<?= $images["alt"] ?>"
    loading="<?= $lazy ? "lazy" : "eager" ?>"
    decoding="async"
    class="<?= $className ?>"
  />
</picture>