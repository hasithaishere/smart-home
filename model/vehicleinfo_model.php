<?php

require_once('../config/mysql.php');

function hasVehicle_admin($vehicleno) {

  // Connect to MySQL server
  $db = mysql_connect(HOST,USERNAME,PASSWORD);
  if (!$db) {
    die("Database connection failed miserably: " . mysql_error());
  }

  // Connect to MySQL Database
  $db_select = mysql_select_db(DATABASE,$db);
  if (!$db_select) {
    die("Database selection also failed miserably: " . mysql_error());
  }

  $result = mysql_query("SELECT * FROM service_records WHERE vehicleno = '". mysql_real_escape_string($vehicleno) ."' AND is_deleted = 0", $db);
  if (!$result) {
    die("Database query failed: " . mysql_error());
  }

  $hasVehicle = 0;
  if(mysql_num_rows($result) > 0) {
    $hasVehicle = 1;
  }

  mysql_close($db);

  return $hasVehicle;

}

function hasVehicle_guest($vehicleno, $chassieNo) {

  // Connect to MySQL server
  $db = mysql_connect(HOST,USERNAME,PASSWORD);
  if (!$db) {
    die("Database connection failed miserably: " . mysql_error());
  }

  // Connect to MySQL Database
  $db_select = mysql_select_db(DATABASE,$db);
  if (!$db_select) {
    die("Database selection also failed miserably: " . mysql_error());
  }

  $result = mysql_query("SELECT * FROM service_records WHERE vehicleno = '". mysql_real_escape_string($vehicleno) ."' AND chassieno LIKE'%" . mysql_real_escape_string($chassieNo) . "' AND is_deleted = 0", $db);
  if (!$result) {
    die("Database query failed: " . mysql_error());
  }

  $hasVehicle = 0;
  if(mysql_num_rows($result) > 0) {
    $hasVehicle = 1;
  }

  mysql_close($db);

  return $hasVehicle;

}
