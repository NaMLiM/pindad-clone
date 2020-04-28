<?php

    include("connection.php");
    session_start();

    $page = $_GET["page"];
    $id_produk = $_POST["id"];
    $nama_produk = $_POST["nama_produk"];
    $jenis_produk = $_POST["jenis_produk"];
    $kategori = $_POST["kategori"];
    $gambar = $_POST["gambar"];
    $video = $_POST["video"];
    $spek = $_POST["spek"];

    $edit = mysqli_query($connection, "update produk set nama_produk='$nama_produk', jenis_produk='$jenis_produk', kategori='$kategori', gambar='$gambar', video='$video', spek='$spek' where id_produk=$id_produk");

    if($edit){
        echo "
            <script>
                alert('Update Data Berhasil');
                document.location = '../dashboard.php?page=$page';
            </script>
        ";
    }
    else{
        echo "Error";
    }

?>