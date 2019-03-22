<?php
//error_reporting( E_ALL );
ini_set('display_errors', 1);
//ini_set('display_setup_errors', true);

require_once "autoloader.php";

$sLocation = $_SERVER["DOCUMENT_ROOT"]."/curso-php-11088";
require_once "$sLocation/utilities/menu-utilities.php";

session_start();

$_SESSION["USE-CDN"] = true;

