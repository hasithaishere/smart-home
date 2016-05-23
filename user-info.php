<?php
session_start();

//$_SESSION["vehicle_no"] = "aaa-1234";

$userType = 0;

if (!(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)) {
	header("Location: login.php");
}

require_once ('header.php');
require_once ("model/manageuser_ext_model.php");

$allUserInfo = getAllUserInfo();

$smarty->assign('userData', $allUserInfo);

$smarty->display('user-info.tpl');

require_once ('footer.php');
