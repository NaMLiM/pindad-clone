<?php
    include_once("connection.php");

    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $berita = $_POST['berita'];
    $url_edit = array('%20',' ',"!","?");
    $url = "../../news/".$_POST['judul'].".html";
    $url = str_replace($url_edit,"-",$url);
    $gambar = $_POST['thumbnail'];
    $query = mysqli_query($connection, "insert into berita values (NULL,'$judul',CURRENT_DATE,'$url','$gambar','$kategori')");
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