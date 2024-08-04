<?php

add_action("init", "editor_extra_init");
add_action("admin_menu", "remove_menus", 999);

function editor_extra_init()
{
    disable_post_support();
    enable_post_support();
}

function disable_post_support()
{
    remove_post_type_support("post", "excerpt"); // 抜粋
    remove_post_type_support("post", "trackbacks"); // トラックバック
    remove_post_type_support("post", "comments"); // ディスカッション
}

function enable_post_support()
{
    add_theme_support("post-thumbnails"); // アイキャッチを有効化
}

function remove_menus()
{
    remove_menu_page("edit.php"); // 投稿
    remove_menu_page("edit-comments.php"); // コメント
}
