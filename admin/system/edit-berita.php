<?php

    include("connection.php");
    session_start();

    function deleteDir($folder_path) {
        if(!is_dir($folder_path)){
            return false;
        }

        // List of name of files inside 
        // specified folder 
        $files = glob($folder_path.'/*');  
        
        // Deleting all the files in the list 
        foreach($files as $file) { 
        
            if(is_file($file))  
            
                // Delete the given file 
                unlink($file);  
        } 
        rmdir($folder_path);
    }

    $id_berita = $_GET["id"];
    $judul_berita = $_POST["judul_berita"];
    $kategori = $_POST["kategori"];

    $select = mysqli_query($connection, "select * from berita where id_berita=$id_berita");
    $data=mysqli_fetch_array($select);

    $id = explode("-", $data["gambar"])[0];

    if(isset($_FILES["gambar1"])){
        deleteDir("../../news/".explode("-", $data['gambar'])[0]."/gambar");
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
                $gambar = null;
            }
        }
    }
    else{
        $gambar = $data["gambar"];
    }

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