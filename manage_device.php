<?php
session_start();

if (!(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)) {
	header("Location: login.php");
}

require_once ('header.php');

if (!isset($_GET['userid'])) {
	header("Location: user-info.php");
} else {
	require_once ("model/managedevice_ext_model.php");
	$userid = $_GET['userid'];

	$result = getSingleDeviceInfo($userid)[0];
	$smarty->assign('deviceData', $result);
	$smarty->assign('org_user_id', $userid);
}

$smarty->display('manage_device.tpl');

require_once ('footer.php');
