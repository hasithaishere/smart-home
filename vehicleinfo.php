<?php
session_start();


//$_SESSION["vehicle_no"] = "aaa-1234";

$userType = 0;

if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
  $userType = 1;

  if(!isset($_SESSION['vehicle_no'])) {
    header("Location: gotovehicle-admin.php");
  }

} else {
  if(!isset($_SESSION['vehicle_no'])) {
    header("Location: gotovehicle.php");
  }
}

require_once('header.php');
require_once("model/vehicleinfoext_model.php");

$currentVehicleNo = $_SESSION["vehicle_no"];

$showCaseGallery = getDirContentUrls(SHOWCASE_UPLOAD_PATH . md5($currentVehicleNo));
$documentGallery = getDirContentUrls(DOCUMENT_UPLOAD_PATH . md5($currentVehicleNo));

$vehicleInfo = getVehicleInfo($currentVehicleNo);

$owner = "";
$vehicleNo = "";
$modelNo = "";
$chassieNo = "";

foreach ($vehicleInfo as $data) {
  $owner = $data["ownername"];
  $vehicleNo = strtoupper ($data["vehicleno"]);
  $modelNo = $data["modelname"];
  $chassieNo = $data["chassieno"];
  break;
}

$smarty->assign('owner', $owner);
$smarty->assign('vehicleNo', $vehicleNo);
$smarty->assign('modelNo', $modelNo);
$smarty->assign('chassieNo', $chassieNo);
$smarty->assign('vehicleData', $vehicleInfo);

$smarty->assign('allImages', $showCaseGallery);
$smarty->assign('allDocuments', $documentGallery);

$smarty->assign('userType', $userType);

$smarty->display('vehicleinfo.tpl');

require_once('footer.php');
