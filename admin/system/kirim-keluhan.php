<?php

    $pesan = "Nama : ".$_POST['nama']."\nEmail : ".$_POST['email']."\nNo Tlp : ".$_POST['notlp']."\nPesan : ".$_POST['pesan'];

    $pesan = wordwrap($pesan, 70);

    mail("anamskansamal@gmail.com", "Keluhan", $pesan);

    header("location:../login.php");

?>