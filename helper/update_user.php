<?php
session_start();
require_once ("../model/manageuser_model.php");
require_once ("../config/main_config.php");

$userid   = $_POST['userid'];
$name     = $_POST['userrealname'];
$email    = $_POST['username'];
$password = $_POST['password'];
$usertype = $_POST['user-type'];
$nic      = $_POST['nic'];
$address  = $_POST['address'];
$tel1     = $_POST['tel1'];
$tel2     = $_POST['tel2'];

if (updateUser($userid, $name, $email, $password, $usertype, $nic, $address, $tel1, $tel2) == 1) {
	header("Location: ".BASE_URL."user-info.php");
} else {
	header("Location: ".BASE_URL."admin-panel.php");
}
