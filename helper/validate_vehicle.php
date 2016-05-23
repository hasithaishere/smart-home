<?php
session_start();
require_once("../model/vehicleinfo_model.php");
require_once("../config/main_config.php");

if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
  $vehicleNo = strtolower($_POST['vehicleno']);

  if(hasVehicle_admin($vehicleNo)) {
    $_SESSION["vehicle_no"] = $vehicleNo;
    header("Location: " . BASE_URL . "vehicleinfo.php");
  } else {
    header("Location: " . BASE_URL . "gotovehicle-admin.php?error=no-vehicle");
  }


} else {

  $vehicleNo = strtolower($_POST['vehicleno']);
  $chassieNo = strtolower($_POST['chcode']);
  
  if(hasVehicle_guest($vehicleNo, $chassieNo)) {
    $_SESSION["vehicle_no"] = $vehicleNo;
    header("Location: " . BASE_URL . "vehicleinfo.php");
  } else {
    header("Location: " . BASE_URL . "gotovehicle.php?error=no-vehicle");
  }
}
