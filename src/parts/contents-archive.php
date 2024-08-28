<?php
// ページネーション
$pagination_range = 1;
$pagination_add_first_and_last = true;
$pagination = get_pagination($pagination_range, $pagination_add_first_and_last);
?>

<div class="archive-works">
  <div class="archive-works__bg">
    <div class="container">
      <?php get_template_part("./parts/heading-page", null, [
          "title" => "ARCHIVE",
      ]); ?>
      <div class="about-works__inner">
        <!-- メインループ -->
        <?php if (have_posts()): ?>
          <ul class="archive-works__list">
            <?php while (have_posts()):

                the_post();
                $id = get_the_ID();
                $title = get_the_title();
                $href = get_permalink();
                $categorys = [
                    "name" => get_terms("works-category")[0]->name,
                    "slug" => get_terms("works-category")[0]->slug,
                ];
                $image_id = get_post_thumbnail_id($id);
                $image_alt = get_post_meta($image_id, "_wp_attachment_image_alt", true);
                $image_src = get_the_post_thumbnail_url();
                $images = [
                    "src" => $image_src,
                    "alt" => $image_alt,
                ];
                ?>
              <li>
                <?php get_template_part("./parts/card-archive", null, [
                    "title" => $title,
                    "categorys" => $categorys,
                    "href" => $href,
                    "images" => $images,
                ]); ?>
              </li>
            <?php
            endwhile; ?>
          </ul>
        <?php endif; ?>
        <div class="archive-works__pagination">
          <?php get_template_part("./parts/pagination", null, [
              "pagination" => $pagination,
          ]); ?>
        </div>
      </div>
    </div>
  </div>
</div>