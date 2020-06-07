<?php

    include("connection.php");
    session_start();

    //get data
    $nama_produk = $_POST["nama_produk"];
    $jenis_produk = $_POST["jenis_produk"];

    if(isset($_POST["kategori"])){
        $kategori = $_POST["kategori"];
    }
    else{
        $kategori = null;
    }

    if(isset($_FILES["gambar"])){
        $target = uniqid();
        $target_dir = "/../upload/gambar/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
            $gambar = $target_dir.basename($_FILES["gambar"]["name"]);
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    else{
        $gambar = null;
    }
    echo $nama_produk."<br>".$kategori."<br>".$gambar

?>