<?php
session_start();
require_once("../config/main_config.php");

if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
  header("Location: " . BASE_URL . "gotovehicle-admin.php");
} else {
  header("Location: " . BASE_URL . "gotovehicle.php");
}
