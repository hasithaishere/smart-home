<?php

require_once('header.php');

$hasError = 0;

if(strcasecmp($_GET['error'],"no-vehicle") == 0) {
  $hasError = 1;
}

$smarty->assign('hasError', $hasError);

$smarty->display('gotovehicle.tpl');

require_once('footer.php');
