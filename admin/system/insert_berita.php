<?php

    include("connection.php");
    session_start();

    //get data
    $judul_berita = $_POST["judul_berita"];
    $kategori = $_POST["kategori"];
    $id = uniqid();
    mkdir("../../news/".$id);

    if(isset($_POST["jumlah_gambar"])){
        mkdir("../../news/".$id."/gambar");
        $gambar = $id;
        for($i=1; $i <= (int)$_POST["jumlah_gambar"]; $i++){
            $target = $i.".".strtolower(pathinfo(basename($_FILES["gambar".$i]["name"]),PATHINFO_EXTENSION));
            $target_dir = "../../news/".$id."/gambar/";
            $target_file = $target_dir . $target;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            if (move_uploaded_file($_FILES["gambar".$i]["tmp_name"], $target_file)) {
                $gambar = $gambar."-".$i.".".$imageFileType;
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    else{
        $gambar = null;
    }

    if(isset($_POST["isi_berita"])){
        mkdir("../../news/".$id."/isi_berita");
        $myfile = fopen("../../news/".$id."/isi_berita/".$id.".html", "w") or die("Unable to open file!");
        fwrite($myfile, $_POST["isi_berita"]);
        fclose($myfile);
        $isi_berita = "../../news/".$id."/isi_berita/".$id.".html";
    }
    else{
        $isi_berita = null;
    }

    $insert = mysqli_query($connection, "insert into berita values (null, '$judul_berita', '".date("Y-m-d")."', '$isi_berita', '$gambar', '$kategori')");

    if($insert){
        ?>
        <script>
            alert("Data Berhasil Ditambahkan");
            document.location = "../dashboard.php?page=berita";
        </script>
        <?php
    }
    else{
        echo "$id<br>$judul_berita<br>$kategori<br>$gambar<br>$isi_berita";
    }

?>