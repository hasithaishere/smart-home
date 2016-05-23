<?php

require_once('../config/mysql.php');
require_once('../config/main_config.php');

$json = array("status" => 0, "msg" => "Record Insertion Failed.");

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $token = isset($_POST['token']) ? $_POST['token'] : "";
    $data = isset($_POST['data']) ? $_POST['data'] : "";

    if (strcmp(API_TOKEN, $token) == 0)
    {

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

      $dataObject = json_decode($data, true);

      $result = mysql_query("INSERT INTO service_records (billno, vehicleno, chassieno, ownername, modelname, billedtime, kmcount, items, description, createdby, createdon) VALUES ('". mysql_real_escape_string($dataObject["billno"]) ."', '". mysql_real_escape_string($dataObject["vehicleno"]) ."', '". mysql_real_escape_string($dataObject["chassieno"]) ."', '". mysql_real_escape_string($dataObject["ownername"]) ."', '". mysql_real_escape_string($dataObject["modelname"]) ."', '". mysql_real_escape_string($dataObject["billedtime"]) ."', '". mysql_real_escape_string($dataObject["kmcount"]) ."', '". mysql_real_escape_string($dataObject["items"]) ."', '". mysql_real_escape_string($dataObject["description"]) ."','1', NOW())", $db);
      if (!$result) {
        die("Database query failed: " . mysql_error());
      } else {
        $json = array("status" => 1, "msg" => "Record Inserted.");
      }

      mysql_close($db);

    }
    else
    {
      $json = array("status" => 2, "msg" => "Authentication Failed.");
    }
}

header('Content-type: application/json');
echo json_encode($json);
