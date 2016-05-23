<?php
session_start();

if (!(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)) {
	header("Location: login.php");
}

require_once ('header.php');

$smarty->display('add-user.tpl');

require_once ('footer.php');
