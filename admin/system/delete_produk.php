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

    $select = mysqli_query($connection, "select * from produk where id_produk=$id");
    $data = mysqli_fetch_array($select);

    $delete = mysqli_query($connection, "delete from produk where id_produk=$id");

    if($delete){
        deleteDir("../upload/".explode("-", $data['gambar'])[0]."/gambar");
        deleteDir("../upload/".explode("-", $data['gambar'])[0]."/spek");
        deleteDir("../upload/".explode("-", $data['gambar'])[0]."/deskripsi");
        deleteDir("../upload/".explode("-", $data['gambar'])[0]."/download");
        deleteDir("../upload/".explode("-", $data['gambar'])[0]);
        ?>
        <script>
            alert("Data berhasil dihapus!");
            document.location = "../dashboard.php?page=produk";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data gagal dihapus!");
            document.location = "../dashboard.php?page=produk";
        </script>
        <?php
    }

?>