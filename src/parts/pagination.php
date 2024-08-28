<?php
$pagination = $args["pagination"] ?? [];
// array
?>

<nav class="pagination" aria-label="ページナビゲーション">
  <div class="pagination__list">
    <!-- arrow prev -->
    <?php if ($pagination["prev"]): ?>
      <div class="pagination__item">
        <a href="<?= get_pagenum_link($pagination["prev"]) ?>" class="pagination__arrow pagination__arrow--prev">
          <?= get_svg_sprite("icon-arrow-prev", "前のページ") ?>
        </a>
      </div>
    <?php endif; ?>

    <!-- page numbers -->
    <?php foreach ($pagination["numbers"] as $k => $i): ?>
      <div class="pagination__item">
        <?php if ($i !== $pagination["current"]): ?>
          <a href="<?= get_pagenum_link($i) ?>" class="pagination__link">
            <?= $i ?>
          </a>
        <?php else: ?>
          <span class="pagination__link is-current" aria-current="page">
            <?= $i ?>
          </span>
        <?php endif; ?>
      </div>
      <?php if (array_key_exists($k + 1, $pagination["numbers"]) && $pagination["numbers"][$k + 1] - $i > 1): ?>
        <div class="pagination__item">
          <span class="pagination__leader" aria-hidden="true">
            ...
          </span>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>

    <!-- arrow next -->
    <?php if ($pagination["next"]): ?>
      <div class="pagination__item">
        <a href="<?= get_pagenum_link($pagination["next"]) ?>" class="pagination__arrow pagination__arrow--next">
          <?= get_svg_sprite("icon-arrow-next", "次のページ") ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</nav>