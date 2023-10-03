<?php
$pagination = $args['pagination'] ?? []; // array
?>

<nav class="pagination">
  <ul class="pagination__list">
    <!-- arrow prev -->
    <?php if ($pagination['prev']) : ?>
      <li class="pagination__item">
        <a href="<?= get_pagenum_link($pagination['prev']) ?>" class="pagination__arrow pagination__arrow--prev">
          <img src="<?= vite_src_images('icon-arrow-prev.svg') ?>" width="24" height="24" decoding="async" alt="prev">
        </a>
      </li>
    <?php endif; ?>

    <!-- page numbers -->
    <?php foreach ($pagination['numbers'] as $k => $i) : ?>
      <li class="pagination__item">
        <?php if ($i !== $pagination['current']) : ?>
          <a href="<?= get_pagenum_link($i) ?>" class="pagination__link">
            <?= $i ?>
          </a>
        <?php else : ?>
          <span class="pagination__link is-current">
            <?= $i ?>
          </span>
        <?php endif; ?>
      </li>
      <?php if (array_key_exists($k + 1, $pagination['numbers']) && $pagination['numbers'][$k + 1] - $i > 1) : ?>
        <li class="pagination__item">
          <span class="pagination__leader">
            ...
          </span>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>

    <!-- arrow next -->
    <?php if ($pagination['next']) : ?>
      <li class="pagination__item">
        <a href="<?= get_pagenum_link($pagination['next']) ?>" class="pagination__arrow pagination__arrow--next">
          <img src="<?= vite_src_images('icon-arrow-next.svg') ?>" width="24" height="24" decoding="async" alt="next">
        </a>
      </li>
    <?php endif; ?>
  </ul>
</nav>