<?php

require_once('config/mysql.php');

function getVehicleInfo($vehicleno) {

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

  $result = mysql_query("SELECT * FROM service_records WHERE vehicleno = '". mysql_real_escape_string($vehicleno) ."' AND is_deleted = 0 ORDER BY billedtime DESC", $db);
  if (!$result) {
    die("Database query failed: " . mysql_error());
  }

  $return_array = [];

  while ($row = mysql_fetch_array($result)) {
    array_push($return_array, $row);
  }

  mysql_close($db);

  return $return_array;

}
