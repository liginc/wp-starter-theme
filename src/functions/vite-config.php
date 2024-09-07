<?php

/**
 * ローカル環境ではVITEの開発サーバーを参照して、本番環境ではビルドしたファイルを参照する
 */

/**
 * @return ローカル環境or本番環境のJSのパスを返す
 */
function vite_src_js($name)
{
    if (IS_TYPE === "local") {
        // develop mode
        return VITE_SERVER . "/src/assets/" . $name;
    } elseif (IS_TYPE === "production") {
        // production mode
        // .tsを.jsに置換
        $name = str_replace(".ts", ".js", $name);
        return URL_JS . $name . "?ver=" . date("His");
    }
}

/**
 * @return ローカル環境or本番環境のCSSのパスを返す
 */
function vite_src_css($name)
{
    if (IS_TYPE === "local") {
        // develop mode
        return VITE_SERVER . "/src/assets/scss/" . $name;
    } elseif (IS_TYPE === "production") {
        // production mode
        // .scssを.cssに置換
        $name = str_replace(".scss", ".css", $name);
        return URL_CSS . $name . "?ver=" . date("His");
    }
}

/**
 * @return ローカル環境or本番環境のSTATICのパスを返す
 */
function vite_src_static($name)
{
    if (IS_TYPE === "local") {
        // develop mode
        return VITE_SERVER . "/src/assets/static/" . $name;
    } elseif (IS_TYPE === "production") {
        // production mode
        return URL_STATIC . $name . "?ver=" . date("His");
    }
}

/**
 * @return ローカル環境or本番環境のIMAGESのパスを返す
 */
function vite_src_images($name, $extension = null)
{
    if (IS_TYPE === "local") {
        // develop mode
        return VITE_SERVER . "/src/assets/images/" . $name;
    } elseif (IS_TYPE_PRODUCTION) {
        // production mode
        // 拡張子の指定がなくて.jpg/.jpeg/.pngだった場合は.webpに置換
        if (in_array($extension, ["avif", "webp"])) {
            $name = preg_replace("/\.(jpg|jpeg|png)/", "." . $extension, $name);
        } else {
            $name = preg_replace("/\.(jpg|jpeg|png)/", ".webp", $name);
        }
        return URL_IMAGES . $name . "?ver=" . date("His");
    }
}
