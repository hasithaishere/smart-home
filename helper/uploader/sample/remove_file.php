<?php

session_start();

//dummy session for dev.
$_SESSION["vehicle_no"] = "AEE-1265";

if(isset($_POST['file'])){
    $file = '../uploads/showcase/'.$_SESSION["vehicle_no"]. '/' . $_POST['file'];
    if(file_exists($file)){
        unlink($file);
    }
}
?>
