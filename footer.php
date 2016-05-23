<?php

session_start();

$isAdmin = 0;

if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
	$isAdmin = 1;
}

if (isset($_SESSION['is_device_user']) && $_SESSION['is_device_user'] == 1) {
	$isAdmin = 1;
}

$smarty->assign('is_admin', $isAdmin);

$smarty->display('support/footer.tpl');
