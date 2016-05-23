<?php

require_once ('../config/mysql.php');

function isAdminUser($username, $password) {

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

	$result = mysql_query("SELECT * FROM users WHERE username = '".mysql_real_escape_string($username)."' AND password = '".mysql_real_escape_string($password)."' AND is_enabled = 1 AND is_deleted = 0 AND user_type = 1", $db);
	if (!$result) {
		die("Database query failed: ".mysql_error());
	}

	$isAdmin = 0;
	if (mysql_num_rows($result) > 0) {
		$isAdmin = 1;
	}

	mysql_close($db);

	return $isAdmin;

}

function isDeviceUser($username, $password) {

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

	$result = mysql_query("SELECT * FROM users WHERE username = '".mysql_real_escape_string($username)."' AND password = '".mysql_real_escape_string($password)."' AND is_enabled = 1 AND is_deleted = 0 AND user_type = 2", $db);
	if (!$result) {
		die("Database query failed: ".mysql_error());
	}

	$return_array = [];

	while ($row = mysql_fetch_array($result)) {
		array_push($return_array, $row);
	}

	mysql_close($db);

	return $return_array;

}
