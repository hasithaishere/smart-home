<?php

require_once ('../config/mysql.php');

function addUser($name, $email, $password, $usertype, $nic, $address, $tel1, $tel2) {

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

	$result = mysql_query("INSERT INTO users(name, username, password, user_type, nic, address, tel1, tel2, createdby, createdon) VALUES ('".mysql_real_escape_string($name)."', '".mysql_real_escape_string($email)."', '".md5(mysql_real_escape_string($password))."', '".mysql_real_escape_string($usertype)."', '".mysql_real_escape_string($nic)."', '".mysql_real_escape_string($address)."', '".mysql_real_escape_string($tel1)."', '".mysql_real_escape_string($tel2)."', '1000', now())", $db);

	if (!$result) {
		die("Database query failed: ".mysql_error());
	}

	mysql_close($db);

	return $result;

}

function deleteUser($userid) {

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

	$result = mysql_query("UPDATE users SET is_deleted='1' WHERE (id='".mysql_real_escape_string($userid)."')", $db);

	if (!$result) {
		die("Database query failed: ".mysql_error());
	}

	mysql_close($db);

	return $result;

}

function endisUser($userid, $state) {

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

	$result = mysql_query("UPDATE users SET is_enabled='".mysql_real_escape_string($state)."' WHERE (id='".mysql_real_escape_string($userid)."')", $db);

	if (!$result) {
		die("Database query failed: ".mysql_error());
	}

	mysql_close($db);

	return $result;

}

function updateUser($userid, $name, $email, $password, $usertype, $nic, $address, $tel1, $tel2) {
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

	$password_string = "";

	if (strcmp($password, "") !== 0) {
		$password_string = " password='".md5(mysql_real_escape_string($password))."',";
	}

	$result = mysql_query("UPDATE users SET name='".mysql_real_escape_string($name)."', username='".mysql_real_escape_string($email)."',  user_type='".mysql_real_escape_string($usertype)."',".$password_string." nic='".mysql_real_escape_string($nic)."', address='".mysql_real_escape_string($address)."', tel1='".mysql_real_escape_string($tel1)."', tel2='".mysql_real_escape_string($tel2)."', modifiedon=now(), modifiedby='1000' WHERE (id='".mysql_real_escape_string($userid)."')", $db);

	if (!$result) {
		die("Database query failed: ".mysql_error());
	}

	mysql_close($db);

	return $result;

}