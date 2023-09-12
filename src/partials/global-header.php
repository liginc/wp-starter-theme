<header class="global-header">
  <nav>
    <ul class="global-header__list">
      <li><a href="<?= URL_HOME ?>">HOME</a></li>
      <li><a href="<?= URL_ABOUT ?>">ABOUT</a></li>
      <li><a href="<?= URL_ARCHIVE ?>">ARCHIVE</a></li>
      <li><a href="<?= URL_PRIVACY ?>">PRIVACY</a></li>
      <li><a href="<?= URL_CONTACT ?>" target="_blank" rel="noopener noreferrer">CONTACT</a></li>
    </ul>
  </nav>
  <?php get_template_part('./partials/global-hamburger-menu-btn') ?>
  <?php get_template_part('./partials/global-hamburger-menu') ?>
</header>