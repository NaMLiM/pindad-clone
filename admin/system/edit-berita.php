<?php

    include("connection.php");
    session_start();

    $id_berita = $_GET["id"];
    $judul_berita = $_POST["judul_berita"];
    $kategori = $_POST["kategori"];

    $select = mysqli_query($connection, "select * from berita where id_berita=$id_berita");
    $data=mysqli_fetch_array($select);

    $id = explode("-", $data["gambar"])[0];

    if(isset($_POST["isi_berita"])){
        $myfile = fopen("../../news/".$id."/isi_berita/".$id.".html", "w") or die("Unable to open file!");
        fwrite($myfile, $_POST["isi_berita"]);
        fclose($myfile);
        $isi_berita = "../../news/".$id."/isi_berita/".$id.".html";
    }
    else{
        $isi_berita = null;
    }

    $edit = mysqli_query($connection, "update berita set judul_berita='$judul_berita', isi='$isi_berita', kategori='$kategori' where id_berita=$id_berita");

    if($edit){
        echo "
            <script>
                alert('Update Data Berhasil');
                document.location = '../dashboard.php?page=berita';
            </script>
        ";
    }
    else{
        echo "Error";
    }

?>