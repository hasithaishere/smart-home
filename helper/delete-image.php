<?php
define("ROOT_FOLDER_PATH", $_SERVER["DOCUMENT_ROOT"] . '/app');
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
define("BASE_URL", 'http://'.parse_url($url, PHP_URL_HOST) . '/app/');

$json = array("status" => 0, "msg" => "Image Not Deleted");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $imgUrl = isset($_POST['img-url']) ? $_POST['img-url'] : "";
    $imgFilePath = str_replace(BASE_URL, ROOT_FOLDER_PATH.DIRECTORY_SEPARATOR, $imgUrl);

    if (unlink($imgFilePath))
    {
      $json = array("status" => 1, "msg" => "Image Deleted");
    }
    else
    {
      $json = array("status" => 2, "msg" => "Image Not Delete");
    }
}

header('Content-type: application/json');
echo json_encode($json);
