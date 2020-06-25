<?php

    include("connection.php");
    session_start();

    //get data
    $id_produk = $_GET["id"];
    $nama_produk = $_POST["nama_produk"];
    $jenis_produk = $_POST["jenis_produk"];
    $kategori = $_POST["kategori"];

    $select = mysqli_query($connection, "select * from produk where id_produk=$id_produk");
    $data=mysqli_fetch_array($select);
    $gambar = $data["gambar"];
    $video = $data["video"];
    $download = $data["download"];

    $id = explode("-", $data["gambar"])[0];

    if(isset($_POST["spek"])){
        $myfile = fopen("../upload/".$id."/spek/".$id.".html", "w") or die("Unable to open file!");
        fwrite($myfile, $_POST["spek"]);
        fclose($myfile);
        $spek = "../upload/".$id."/spek/".$id.".html";
    }
    else{
        $spek = $data["spek"];
    }

    if(isset($_POST["deskripsi"])){
        $myfile = fopen("../upload/".$id."/deskripsi/".$id.".html", "w") or die("Unable to open file!");
        fwrite($myfile, $_POST["deskripsi"]);
        fclose($myfile);
        $deskripsi = "../upload/".$id."/deskripsi/".$id.".html";
    }
    else{
        $deskripsi = ["deskripsi"];
    }

    $update = mysqli_query($connection, "update produk set nama_produk='$nama_produk', jenis_produk='$jenis_produk', kategori='$kategori', gambar='$gambar', video='$video', spek='$spek', deskripsi='$deskripsi', download='$download' where id_produk=$id_produk");

    if($update){
        ?>
        <script>
            alert("Data Berhasil Diupdate");
            document.location = "../dashboard.php?page=produk";
        </script>
        <?php
    }
    else{
        echo $id;
    }

?>