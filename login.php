<?php

require_once('header.php');

$hasError = 0;

if(strcasecmp($_GET['error'],"login-failed") == 0) {
  $hasError = 1;
}

$smarty->assign('hasError', $hasError);

$smarty->display('login.tpl');

require_once('footer.php');
