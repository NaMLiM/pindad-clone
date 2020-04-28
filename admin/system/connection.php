<?php

    $connection = mysqli_connect("localhost", "root", "", "pindad-db");
    if(mysqli_connect_errno()){
        echo mysqli_connect_errno();
    }

?>