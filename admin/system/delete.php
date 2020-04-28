<?php

    include("connection.php");
    session_start();

    $tabel = $_GET["page"];
    $id = $_GET["id"];

    $delete = mysqli_query($connection, "delete from $tabel where id_$tabel='$id'");

    if($delete){
        echo "
            <script>
                alert('Hapus Data Berhasil');
                document.location = '../dashboard.php?page=$tabel';
            </script>
        ";
    }
    else{
        echo "Error";
    }

?>