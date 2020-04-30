<?php

    $connection = mysqli_connect("127.0.0.1", "root", "", "pindad-db");
    if(mysqli_connect_errno()){
        echo mysqli_connect_errno();
    }

?>