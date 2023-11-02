<?php
get_template_part("./parts/global-header");

$id = get_the_ID();
$title = get_the_title();
$image_id = get_post_thumbnail_id($id);
$image_alt = get_post_meta($image_id, "_wp_attachment_image_alt", true);
$image_src = get_the_post_thumbnail_url();
$images = [
    "src" => $image_src,
    "alt" => $image_alt,
];
?>

<div class="single-works">
  <div class="single-works__bg">
    <div class="container">
      <?php get_template_part("./parts/heading-page", null, [
          "title" => "SINGLE",
      ]); ?>
      <div class="single-works__inner">
        <h2 class="single-works__title"><?= $title ?></h2>
        <p class="single-works__thumbnail">
          <?php if ($images["src"]): ?>
            <img src="<?= $images["src"] ?>" width="600" height="400" decoding="async" alt="<?= $images["alt"] ?>">
          <?php else: ?>
            <img src="<?= vite_src_images("noimage.jpg") ?>" width="800" height="560" decoding="async" alt="">
          <?php endif; ?>
        </p>
        <div class="single-works__content">
          <div class="editor">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part("./parts/global-footer");
?>
