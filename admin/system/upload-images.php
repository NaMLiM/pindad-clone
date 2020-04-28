<?php
/***************************************************
 * Only these origins are allowed to upload images *
 ***************************************************/
$accepted_origins = array("http://localhost", "http://192.168.1.1", "http://example.com");

/*********************************************
 * Change this line to set the upload folder *
 *********************************************/
$imageFolder = $_SERVER['DOCUMENT_ROOT']."/pindad-clone/news/images/";

reset ($_FILES);
$temp = current($_FILES);
if (is_uploaded_file($temp['tmp_name'])){
  if (isset($_SERVER['HTTP_ORIGIN'])) {
    // same-origin requests won't set an origin. If the origin is set, it must be valid.
    if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
      header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
    } else {
      header("HTTP/1.1 403 Origin Denied");
      return;
    }
  }

  /*
    If your script needs to receive cookies, set images_upload_credentials : true in
    the configuration and enable the following two headers.
  */
  // header('Access-Control-Allow-Credentials: true');
  // header('P3P: CP="There is no P3P policy."');

  // Sanitize input
  if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
      header("HTTP/1.1 400 Invalid file name.");
      return;
  }

  // Verify extension
  if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))) {
      header("HTTP/1.1 400 Invalid extension.");
      return;
  }

  // Accept upload if there was no origin, or if it is an accepted origin
  $filetowrite = $imageFolder . $temp['name'];
  move_uploaded_file($temp['tmp_name'], $filetowrite);

  // Respond to the successful upload with JSON.
  // Use a location key to specify the path to the saved image resource.
  // { location : '/your/uploaded/image/file'}
  echo json_encode(array('location' => $filetowrite));
} else {
  // Notify editor that the upload failed
  header("HTTP/1.1 500 Server Error");
}

/*$allowedExts = array("gif", "jpeg", "jpg", "png");

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

    move_uploaded_file($_FILES["image"]["tmp_name"], getcwd() . "../../news/images/" . $name);

    $response = new StdClass;
    $response->link = "http://localhost/pindad-clone/news/images/" . $name;
    echo stripslashes(json_encode($response));
}*/
   ?>