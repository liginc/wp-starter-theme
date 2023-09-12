<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?= vite_src_static('favicon.ico') ?>">
  <link rel="apple-touch-icon" href="<?= vite_src_static('apple-touch-icon.png') ?>">
  <link rel="stylesheet" href="<?= vite_src_css('app.scss') ?>">
  <?php wp_head(); ?>
</head>

<body id="top" data-type="<?= IS_TYPE ?>" <?php body_class(); ?>>
  <?php if (IS_TYPE_LOCAL) get_template_part('./partials/helper-grid') ?>
  <?php get_template_part('./partials/global-header') ?>