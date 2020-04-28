<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");

$temp = explode(".", $_FILES["image"]["name"]);

$extension = end($temp);

$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $_FILES["image"]["tmp_name"]);

if ((($mime == "image/gif")
|| ($mime == "image/jpeg")
|| ($mime == "image/x-png")
|| ($mime == "image/png"))
&& in_array(strtolower($extension), $allowedExts)) {
    $name = sha1(microtime()) . "." . $extension;

    move_uploaded_file($_FILES["image"]["tmp_name"], getcwd() . "/upload/images/" . $name);

    $response = new StdClass;
    $response->link = "http://localhost/pindad-clone/upload/images/" . $name;
    echo stripslashes(json_encode($response));
}
   ?>