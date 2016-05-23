<?php
session_start();
require_once ("../model/manageuser_model.php");

$userid = $_GET['userid'];

if (!(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)) {
	header("Location: login.php");
}

deleteUser($userid);

header("Location: ../user-info.php");