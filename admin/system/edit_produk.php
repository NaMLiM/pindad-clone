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

    //get data
    $id_produk = $_GET["id"];
    $nama_produk = $_POST["nama_produk"];
    $jenis_produk = $_POST["jenis_produk"];


    $select = mysqli_query($connection, "select * from produk where id_produk=$id_produk");
    $data=mysqli_fetch_array($select);
    $download = $data["download"];

    
    if(isset($_POST["kategori"])){
        $kategori = $_POST["kategori"];
    }
    else{
        $kategori = $data["kategori"];
    }

    $id = explode("-", $data["gambar"])[0];

    if(isset($_FILES["gambar"]) || isset($_POST["jumlah_gambar"])){
        if(isset($_FILES["gambar"])){
            deleteDir("../upload/".explode("-", $data['gambar'])[0]."/gambar");
            mkdir("../upload/".$id."/gambar");
            $target = "1.".strtolower(pathinfo(basename($_FILES["gambar"]["name"]),PATHINFO_EXTENSION));
            $target_dir = "../upload/".$id."/gambar/";
            $target_file = $target_dir . $target;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $gambar = $id."-1".".".$imageFileType;
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }
        else{
            deleteDir("../upload/".explode("-", $data['gambar'])[0]."/gambar");
            mkdir("../upload/".$id."/gambar");
            $gambar = $id;
            for($i=1; $i <= (int)$_POST["jumlah_gambar"]; $i++){
                $target = $i.".".strtolower(pathinfo(basename($_FILES["gambar".$i]["name"]),PATHINFO_EXTENSION));
                $target_dir = "../upload/".$id."/gambar/";
                $target_file = $target_dir . $target;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                
                if (move_uploaded_file($_FILES["gambar".$i]["tmp_name"], $target_file)) {
                    $gambar = $gambar."-".$i.".".$imageFileType;
                } else {
                echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    }
    else{
        
    $gambar = $data["gambar"];
    }
    
    if(isset($_POST["video"])){
        $video = $_POST["video"];
    }
    else{
        $video = $data["video"];
    }

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