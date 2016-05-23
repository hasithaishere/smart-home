<?php

require_once ('../config/mysql.php');

function updateDevice($user_id, $device_id, $device_type, $location, $device_name, $no_of_subdevices, $no_of_readers) {

	// Connect to MySQL server
	$db = mysql_connect(HOST, USERNAME, PASSWORD);
	if (!$db) {
		die("Database connection failed miserably: ".mysql_error());
	}

	// Connect to MySQL Database
	$db_select = mysql_select_db(DATABASE, $db);
	if (!$db_select) {
		die("Database selection also failed miserably: ".mysql_error());
	}

	$result = mysql_query("DELETE FROM user_device WHERE user_id = '".mysql_real_escape_string($user_id)."'");

	if (!$result) {
		die("Database query failed: ".mysql_error());
	}

	$result = mysql_query("INSERT INTO user_device (user_id, device_id, device_type, location, device_name, no_of_subdevices, no_of_readers, createdon, createdby) VALUES ('".mysql_real_escape_string($user_id)."', '".mysql_real_escape_string($device_id)."', '".mysql_real_escape_string($device_type)."', '".mysql_real_escape_string($location)."', '".mysql_real_escape_string($device_name)."', '".mysql_real_escape_string($no_of_subdevices)."', '".mysql_real_escape_string($no_of_readers)."', now(), '1000')", $db);

	if (!$result) {
		die("Database query failed: ".mysql_error());
	}

	$result = mysql_query("DELETE FROM device WHERE user_id = '".mysql_real_escape_string($user_id)."'");

	if (!$result) {
		die("Database query failed: ".mysql_error());
	}

	$result = mysql_query("INSERT INTO user_device (user_id, device_id, device_type, location, device_name, no_of_subdevices, no_of_readers, createdon, createdby) VALUES ('".mysql_real_escape_string($user_id)."', '".mysql_real_escape_string($device_id)."', '".mysql_real_escape_string($device_type)."', '".mysql_real_escape_string($location)."', '".mysql_real_escape_string($device_name)."', '".mysql_real_escape_string($no_of_subdevices)."', '".mysql_real_escape_string($no_of_readers)."', now(), '1000')", $db);

	if (!$result) {
		die("Database query failed: ".mysql_error());
	}

	for ($x = 1; $x <= $no_of_subdevices; $x++) {
		$result = mysql_query("INSERT INTO device (user_id, main_device_id, sub_device_id, device_name, device_location, device_type, createdby, createdon) VALUES ('".mysql_real_escape_string($user_id)."', '".mysql_real_escape_string($device_id)."', '".mysql_real_escape_string($x)."', 'Sub Device ".mysql_real_escape_string($x)."', 'Location ".mysql_real_escape_string($x)."', '1', '1000', now());", $db);

		if (!$result) {
			die("Database query failed: ".mysql_error());
		}
	}

	for ($x = 1; $x <= $no_of_readers; $x++) {
		$result = mysql_query("INSERT INTO device (user_id, main_device_id, sub_device_id, device_name, device_location, device_type, createdby, createdon) VALUES ('".mysql_real_escape_string($user_id)."', '".mysql_real_escape_string($device_id)."', '".mysql_real_escape_string($x)."', 'Reader ".mysql_real_escape_string($x)."', 'Reader Location ".mysql_real_escape_string($x)."', '2', '1000', now());", $db);

		if (!$result) {
			die("Database query failed: ".mysql_error());
		}
	}

	mysql_close($db);

	return $result;

}
