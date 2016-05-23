<?php
session_start();
require_once ("../model/validateuser_model.php");
require_once ("../config/main_config.php");

$username = $_POST['username'];
$password = $_POST['password'];


if (isAdminUser($username, md5($password)) == 1) {
	$_SESSION['is_admin'] = 1;
	header("Location: ".BASE_URL."admin-panel.php");
} elseif(is_array(isDeviceUser($username, md5($password))[0])) {
	$_SESSION['logged_user_id'] = isDeviceUser($username, md5($password))[0]['id'];
	$_SESSION['is_device_user'] = 1;
	header("Location: ".BASE_URL."device_panel.php");
} else {
	session_destroy();
	header("Location: ".BASE_URL."login.php?error=login-failed");
}
