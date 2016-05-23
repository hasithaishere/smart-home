<?php

require_once('header.php');
/*require_once('model/index_model.php');

$allUsers = getAllUsers();
print_r($allUsers);
$smarty->assign('users', $allUsers);*/

$smarty->display('index.tpl');

require_once('footer.php');
