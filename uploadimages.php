<?php
session_start();

$imageType = $_GET['type'];

$_SESSION["vehicle_no"] = "aaa-1234";

$currentVehicleNo = $_SESSION["vehicle_no"];

if (!isset($_SESSION["vehicle_no"]) || is_null($imageType) || (strcmp($imageType, "doc") !== 0 && strcmp($imageType, "showcase") !== 0))
{
  header("Location: vehicleinfo.php");
}

require_once('header.php');

$smarty->assign('imgType', $imageType);

$smarty->display('uploadimages.tpl');

require_once('footer.php');
