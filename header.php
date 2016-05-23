<?php
// Load main configuration file
require_once('config/main_config.php');
require_once('helper/file/fileutils.php');

require_once(ROOT_FOLDER_PATH . '/lib/cloudinary/Cloudinary.php');
require_once(ROOT_FOLDER_PATH . '/lib/cloudinary/Uploader.php');
require_once(ROOT_FOLDER_PATH . '/lib/cloudinary/Api.php');

require_once(ROOT_FOLDER_PATH . "/lib/smarty-3.1.29/libs/Smarty.class.php");

Cloudinary::config(array(
  "cloud_name" => CLOUDINARY_CLOUD_NAME,
  "api_key" => CLOUDINARY_API_KEY,
  "api_secret" => CLOUDINARY_API_SECRET
));

$smarty = new Smarty();

$smarty->template_dir = 'views';
$smarty->compile_dir = 'temp';

session_start();

$isAdmin = 0;

if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
	$isAdmin = 1;
}

if (isset($_SESSION['is_device_user']) && $_SESSION['is_device_user'] == 1) {
	$isAdmin = 2;
}

$smarty->assign('is_admin', $isAdmin);

$smarty->display('support/header.tpl');
