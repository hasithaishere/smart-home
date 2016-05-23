<?php

// This main configuration details
define("ROOT_FOLDER_PATH", $_SERVER["DOCUMENT_ROOT"] . '/app');
$GLOBALS["ROOT_FOLDER_PATH_GLOB"] = ROOT_FOLDER_PATH;

define("DOCUMENT_UPLOAD_PATH", ROOT_FOLDER_PATH . '/uploads/documents/');
define("SHOWCASE_UPLOAD_PATH", ROOT_FOLDER_PATH . '/uploads/showcase/');

// Cloudinary configurations
define("CLOUDINARY_CLOUD_NAME", "ymoto");
define("CLOUDINARY_API_KEY", "348595932917122");
define("CLOUDINARY_API_SECRET", "6QnBvl0kIYOLGElyAfIpnIjdYHo");

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
define("BASE_URL", 'http://'.parse_url($url, PHP_URL_HOST) . '/app/');

define("API_TOKEN", 'Wdf836ds2345yfdsFgHh26dw7j93duD');
