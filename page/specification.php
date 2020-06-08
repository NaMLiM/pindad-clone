<?php
    $id_produk = $_GET['id_produk'];
    $select = mysqli_query($connection, "select * from produk where id_produk=$id_produk");
    while($data = mysqli_fetch_array($select)){
        $nama_produk = $data["nama_produk"];
        $jenis_produk = $data["jenis_produk"];
        $kategori = $data["kategori"];
        $gambar = $data["gambar"];
        $video = $data["video"];
        $spek = $data["spek"];
    }
?>
<link rel="stylesheet" href="css/template-2.css">

<div class="full text-center">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b><?php echo $nama_produk; ?></b></dt></h1>
</div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Produk & Jasa</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href=""><?php echo $jenis_produk ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $nama_produk ?></li>
    </ol>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="product-img">
                <img src="admin/upload/<?php echo str_replace("-1","",$gambar);?>/gambar/1.jpeg" alt="">
            </div>
        </div>
        <div class="col-md-4 text-dark">
            <h3><?php echo $nama_produk ?></h3>
            Deskripsi disini
        </div>
    </div>
    <div class="row">
        <div class="text-dark">
            <h3>Certification</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">SPECIFICATION</a> <!--Ngambang???-->
                </li>
            </ul>
        </div>
    </div>
    <div class="row mt-5 spec">
        <?php include(str_replace("../","admin/", $spek));?>
    </div>
    <div class="row">
        <h3>Related Product</h3>
    </div>
</div>