<?php
    include_once("connection.php");

    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $berita = $_POST['berita'];
    $url_edit = array('%20',' ',"!","?");
    $url = "../../news/".$_POST['judul'].".html";
    $url = str_replace($url_edit,"-",$url);
    $gambar = "Placeholder";
    $query = mysqli_query($connection, "insert into berita values (NULL,'$judul','2020-04-28','$url','$gambar','$kategori')");
    if($query){
        if($file=fopen($url, "w")){
            if(fwrite($file,$berita))
            fclose($file);
        }
        else{?>
            <script language="javascript">
                alert('Terjadi Kesalah Saat Menulis Berita');
            </script><?php
        }
    }
    else{
        echo "Terjadi Kesalah";
    }
?>