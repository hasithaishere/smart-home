<?php
session_start();

if (!(isset($_SESSION['is_device_user']) && $_SESSION['is_device_user'] == 1)) {
	header("Location: login.php");
}

require_once ('header.php');

require_once ("model/managedevice_ext_model.php");
$userid = $_SESSION['logged_user_id'];

$result = getSubDeviceInfo($userid);

$smarty->assign('subDeviceData', $result);

$smarty->display('device-panel.tpl');

require_once ('footer.php');
