<?php
session_start();

if (!(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)) {
	header("Location: login.php");
}

require_once ('header.php');

if (!isset($_GET['userid'])) {
	header("Location: user-info.php");
} else {
	require_once ("model/manageuser_ext_model.php");
	$userid = $_GET['userid'];

	$result = getSingleUserInfo($userid)[0];
	$smarty->assign('userData', $result);
}

$smarty->display('update_user.tpl');

require_once ('footer.php');
