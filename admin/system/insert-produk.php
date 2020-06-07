<?php

    include("connection.php");
    session_start();

    //get data
    $nama_produk = $_POST["nama_produk"];
    $jenis_produk = $_POST["jenis_produk"];
    $id = uniqid();
    mkdir("../upload/".$id);

    if(isset($_POST["kategori"])){
        $kategori = $_POST["kategori"];
    }
    else{
        $kategori = null;
    }

    if(isset($_FILES["gambar"])){
        mkdir("../upload/".$id."/gambar");
        $target = $id.".".strtolower(pathinfo(basename($_FILES["gambar"]["name"]),PATHINFO_EXTENSION));
        $target_dir = "../upload/".$id."/gambar/";
        $target_file = $target_dir . $target;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        $gambar = $target_dir.$target;
        } else {
        echo "Sorry, there was an error uploading your file.";
        }
    }
    else{
        $gambar = null;
    }

    if(isset($_FILES["video"])){
        mkdir("../upload/".$id."/video");
        $target = $id.".".strtolower(pathinfo(basename($_FILES["video"]["name"]),PATHINFO_EXTENSION));
        $target_dir = "../upload/".$id."/video/";
        $target_file = $target_dir . $target;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
        $video = $target_dir.$target;
        } else {
        echo "Sorry, there was an error uploading your file.";
        }
    }
    else{
        $video = null;
    }

    if(isset($_POST["spek"])){
        mkdir("../upload/".$id."/spek");
        $myfile = fopen("../upload/".$id."/spek/".$id.".html", "w") or die("Unable to open file!");
        fwrite($myfile, $_POST["spek"]);
        fclose($myfile);
        $spek = "../upload/".$id."/spek/".$id.".html";
    }
    else{
        $spek = null;
    }

    $insert = mysqli_query($connection, "insert into produk values (null, '$nama_produk', '$jenis_produk', '$kategori', '$gambar', '$video', '$spek')");

    if($insert){
        ?>
        <script>
            alert("Data Berhasil Ditambahkan");
            document.location = "../dashboard.php?page=produk";
        </script>
        <?php
    }
    else{
        echo $id;
    }

?>