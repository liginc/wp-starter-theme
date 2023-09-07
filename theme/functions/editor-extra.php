<?php

add_action("init", "editor_extra_init");

function editor_extra_init()
{
  disable_post_support();
  enable_post_support();
}

function disable_post_support()
{
  remove_post_type_support('post', 'excerpt'); // 抜粋
  remove_post_type_support('post', 'trackbacks'); // トラックバック
  remove_post_type_support('post', 'comments'); // ディスカッション
}

function enable_post_support()
{
  add_theme_support('post-thumbnails'); // アイキャッチを有効化
}
