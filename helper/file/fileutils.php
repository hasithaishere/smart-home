<?php

function getDirContents($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($path)) {
            $results[] = $path;
        } else if($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}

function getDirContentUrls($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($path)) {
            $results[] = str_replace(ROOT_FOLDER_PATH.DIRECTORY_SEPARATOR, BASE_URL, $path);
        } else if($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = str_replace(ROOT_FOLDER_PATH.DIRECTORY_SEPARATOR, BASE_URL, $path);
        }
    }

    return $results;
}
