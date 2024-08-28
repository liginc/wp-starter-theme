<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?= vite_src_static("favicon.ico") ?>">
  <link rel="apple-touch-icon" href="<?= vite_src_static("apple-touch-icon.png") ?>">
  <link rel="stylesheet" href="<?= vite_src_css("app.scss") ?>">
  <?php wp_head(); ?>
</head>

<body id="top" data-type="<?= IS_TYPE ?>" <?php body_class(); ?>>
  <!-- グリッド補助線 -->
  <?php if (IS_TYPE_LOCAL) {
      get_template_part("./parts/helper-grid");
  } ?>
  <a class="hidden" href="#content">本文へ移動</a>
  <header class="global-header">
    <nav aria-label="グローバルナビゲーション">
      <ul class="global-header__list">
        <li><a href="<?= URL_HOME ?>">HOME</a></li>
        <li><a href="<?= URL_ABOUT ?>">ABOUT</a></li>
        <li><a href="<?= URL_ARCHIVE ?>">ARCHIVE</a></li>
        <li><a href="<?= URL_PRIVACY ?>">PRIVACY</a></li>
        <li><a href="<?= URL_CONTACT ?>" target="_blank" rel="noopener noreferrer">CONTACT</a></li>
      </ul>
    </nav>
    <?php get_template_part("./parts/global-hamburger-menu-btn"); ?>
    <?php get_template_part("./parts/global-hamburger-menu"); ?>
  </header>