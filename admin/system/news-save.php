<?php
    include_once("system/connection.php");

    $judul = $_POST['judul'];
    $berita = $_POST['berita'];
    $date = date('Y-m-d H:i:s');
    $url_edit = array('%20',' ',"!","?");
    $url = "berita/".$_POST['judul'].".html";
    $url = str_replace($url_edit,"-",$url);
    $add = mysqli_query($koneksi, "insert into berita values (NULL,'$judul',NOW(),'$url','$gambar')");
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