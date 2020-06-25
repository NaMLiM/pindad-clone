<?php

    include("connection.php");
    session_start();

    $id = $_GET["id"];
    $delete = mysqli_query($connection, "delete from produk where id_produk=$id");

    if($delete){
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