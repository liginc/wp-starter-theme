<?php

/**
 * @return ローカル環境or本番環境のJSのパスを返す
 */
function vite_src_js($name)
{
  if (IS_TYPE === 'local') {
    // develop mode
    return VITE_SERVER . '/src/assets/' . $name;
  } else if (IS_TYPE === 'production') {
    // production mode
    return URL_JS . $name;
  }
}

/**
 * @return ローカル環境or本番環境のCSSのパスを返す
 */
function vite_src_css($name)
{
  if (IS_TYPE === 'local') {
    // develop mode
    return VITE_SERVER . '/src/assets/css/' . $name;
  } else if (IS_TYPE === 'production') {
    // production mode
    // .scssを.cssに置換
    $name = str_replace('.scss', '.css', $name);
    return URL_CSS . $name;
  }
}

/**
 * @return ローカル環境or本番環境のSTATICのパスを返す
 */
function vite_src_static($name)
{
  if (IS_TYPE === 'local') {
    // develop mode
    return VITE_SERVER . '/src/assets/static/' . $name;
  } else if (IS_TYPE === 'production') {
    // production mode
    return URL_STATIC . $name;
  }
}

/**
 * @return ローカル環境or本番環境のIMAGESのパスを返す
 */
function vite_src_images($name)
{
  if (IS_TYPE === 'local') {
    // develop mode
    return VITE_SERVER . '/src/assets/images/' . $name;
  } else if (IS_TYPE === 'production') {
    // production mode
    return URL_IMAGES . $name;
  }
}
