<?php

    include("connection.php");
    session_start();

    $page = $_GET["page"];
    $id_berita = $_POST["id"];
    $judul_berita = $_POST["judul_berita"];
    $tanggal = $_POST["tanggal_berita"];
    $isi = $_POST["isi_berita"];
    $gambar = $_POST["gambar_berita"];
    $kategori = $_POST["kategori"];

    $edit = mysqli_query($connection, "update berita set judul_berita='$judul_berita', tanggal='$tanggal', isi='$isi', gambar='$gambar', kategori='$kategori' where id_berita=$id_berita");

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