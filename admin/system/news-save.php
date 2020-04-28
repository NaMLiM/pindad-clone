<?php
    include_once("connection.php");

    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $berita = $_POST['berita'];
    $url_edit = array('%20',' ',"!","?");
    $url = "../../news/".$_POST['judul'].".html";
    $url = str_replace($url_edit,"-",$url);
    $gambar = "Placeholder";
    $add = mysqli_query($connection, "insert into berita values (NULL,'$judul',NOW(),'$url','$gambar','$kategori)");
    if($add){
        if($open=fopen($url, "w")){
            if(fwrite($open,$berita))
            fclose($open);
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