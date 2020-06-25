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

    $id = $_GET["id"];

    $select = mysqli_query($connection, "select * from berita where id_berita=$id");
    $data = mysqli_fetch_array($select);

    $delete = mysqli_query($connection, "delete from berita where id_berita=$id");

    if($delete){
        deleteDir("../../news/".explode("-", $data['gambar'])[0]."/gambar");
        deleteDir("../../news/".explode("-", $data['gambar'])[0]."/isi_berita");
        deleteDir("../../news/".explode("-", $data['gambar'])[0]);
        ?>
        <script>
            alert("Data berhasil dihapus!");
            document.location = "../dashboard.php?page=berita";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data gagal dihapus!");
            document.location = "../dashboard.php?page=berita";
        </script>
        <?php
    }

?>