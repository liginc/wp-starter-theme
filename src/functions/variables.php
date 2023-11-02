<?php

/**
 * variables
 */

define("URL_ASSETS", get_template_directory_uri() . "/assets/");
define("URL_CSS", URL_ASSETS . "css/");
define("URL_JS", URL_ASSETS . "js/");
define("URL_STATIC", URL_ASSETS . "static/");
define("URL_IMAGES", URL_ASSETS . "images/");
define("URL_FAVICON", URL_STATIC . "favicon.ico");
define("URL_TOUCH_ICON", URL_STATIC . "apple-touch-icon.png");

// url
define("URL_HOME", home_url("/"));
define("URL_ABOUT", URL_HOME . "about/");
define("URL_ARCHIVE", URL_HOME . "works/");
define("URL_PRIVACY", URL_HOME . "privacy/");

// external url
define("URL_CONTACT", "https://liginc.co.jp/contact");

// ローカル環境ではlocal、本番環境ではproductionを返す
define("IS_TYPE", wp_get_environment_type());
define("IS_TYPE_LOCAL", IS_TYPE === "local" ? true : false);
define("IS_TYPE_PRODUCTION", IS_TYPE === "production" ? true : false);
