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
    <h1 class="display-5 text-light"><dt><b><?php mysqli_query($connection, "select nama_produk from produk where id_produk=$id_produk");?></b></dt></h1>
</div>
<!---->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Produk & Jasa</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href=""><?php echo $jenis_produk ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $nama_produk ?></li>
    </ol>
</nav>
<div class="container mt-6">
    <div class="row">
        <div class="col-md-6">
            <div class="product-img">
                <img src="" alt="">
            </div>
        </div>
        <div class="col-md-4 text-dark">
            <?php echo $nama_produk ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 row">
            SPECIFICATION
        </div>
    </div>
</div>