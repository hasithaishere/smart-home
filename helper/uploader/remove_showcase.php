<?php
require_once('../../config/main_config.php');

session_start();

//dummy session for dev.
$_SESSION["vehicle_no"] = "aaa-1234";

if(isset($_POST['file'])){
    $file = SHOWCASE_UPLOAD_PATH . md5($_SESSION["vehicle_no"]) . '/' . $_POST['file'];
    if(file_exists($file)){
        unlink($file);
    }
}
?>
