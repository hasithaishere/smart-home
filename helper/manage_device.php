<?php
session_start();
require_once ("../model/managedevice_model.php");
require_once ("../config/main_config.php");

$user_id          = $_POST['user_id'];
$device_id        = $_POST['device_id'];
$device_type      = $_POST['device_type'];
$location         = $_POST['location'];
$device_name      = $_POST['device_name'];
$no_of_subdevices = $_POST['no_of_subdevices'];
$no_of_readers    = $_POST['no_of_readers'];

if (updateDevice($user_id, $device_id, $device_type, $location, $device_name, $no_of_subdevices, $no_of_readers) == 1) {
	header("Location: ".BASE_URL."user-info.php");
} else {
	header("Location: ".BASE_URL."admin-panel.php");
}
