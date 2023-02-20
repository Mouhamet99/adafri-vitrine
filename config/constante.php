<?php
define("BAD_ROOT",str_replace(DIRECTORY_SEPARATOR."public_html", "", $_SERVER["SCRIPT_FILENAME"]));
define('ROOT', realpath(dirname(__FILE__) . '/../'));
define('PUBLIC_FOLDER', realpath(dirname(__FILE__) . '/../' . '/public_html/'));
define("ROOT_VIEWS",ROOT.DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR);
define("ROOT_LIB",ROOT.DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR);
define("ROOT_MODELS",ROOT.DIRECTORY_SEPARATOR."models".DIRECTORY_SEPARATOR);
define("ROOT_VIEWS_INC",ROOT_VIEWS."inc".DIRECTORY_SEPARATOR);

define("ROOT_DATA",ROOT.DIRECTORY_SEPARATOR."data".DIRECTORY_SEPARATOR);
define("ROOT_ROUTE",ROOT.DIRECTORY_SEPARATOR."routes".DIRECTORY_SEPARATOR);
define("ROOT_CONFIG",ROOT.DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR);
define("ROOT_LAYOUT",ROOT_VIEWS."layout".DIRECTORY_SEPARATOR);
define("ROOT_BG_LOGOS",ROOT.DIRECTORY_SEPARATOR."public_html".DIRECTORY_SEPARATOR."media".DIRECTORY_SEPARATOR."bg_logos".DIRECTORY_SEPARATOR);
define("ROOT_ASSETS",ROOT.DIRECTORY_SEPARATOR."public_html".DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."images".DIRECTORY_SEPARATOR);
define("START_TAGS", "</head><body>");
define("WEB_ROOT", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https". "://" . $_SERVER['HTTP_HOST'] . "/" : "http" . "://" . $_SERVER['HTTP_HOST'] . "/");
// define("WEB_ROOT","https://www.adafri.com/");
define("ROOT_CONTROLLERS",WEB_ROOT."controllers");
