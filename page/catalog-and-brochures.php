<link rel="stylesheet" href="css/template-2.css">

<div class="full text-center">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>Katalog Dan Brosur</b></dt></h1>
</div>
<!---->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Ruang Publik</a></li>
        <li class="breadcrumb-item active" aria-current="page">Katalog Dan Brosur</li>
    </ol>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="pb-5">
                <h5 class="font-weight-bold text-dark">Ruang Publik</h5>
                <ul class="fa-ul list-aside my-3">
                    <li class="py-1"><a href="index.php?page=news">Berita</a></li>
                    <li class="py-1"><a href="index.php?page=press-release">Siaran Pers</a></li>
                    <li class="py-1"><a href="index.php?page=pindad-in-news">Pindad Dalam Berita</a></li>
                    <li class="py-1"><a href="index.php?page=majalah">Majalah</a></li>
                    <li class="py-1"><a href="index.php?page=catalog-and-brochures" class="active">Katalog Dan Brosur</a></li>
                    <li class="py-1"><a href="index.php?page=gallery">Gallery</a></li>
                    <li class="py-1"><a href="index.php?page=video">Video</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 text-dark isi">
        <p>Berbagai brosur dan katalog produk-produk PT Pindad (Persero) dalam versi digital</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <input type="text" class="search" name="search" placeholder="Quick Search" id="search">
        </div>
        <div class="col-md-9 row mb-5" id="produks">
            <?php
                $select = mysqli_query($connection, "select * from produk where jenis_produk='Katalog dan Brosur'");
                while($data = mysqli_fetch_array($select)){
                    ?>
                    <div class="col-md-3 mb-2 px-2 produks-card" data-target="<?php echo $data['kategori'] ?>">
                        <div class="card">
                            <div class="card-overlay-book">
                                <a href="admin/<?php echo str_replace("../", "", $data["gambar"]); ?>" class="eye rounded-circle bg-orange text-white"><i class="fas fa-eye"></i></a>
                                <i class="fas fa-caret-up fa-2x panah-up"></i>
                            </div>
                            <img class="card-img-top-book" src="admin/<?php echo str_replace("../", "", $data["gambar"]); ?>">
                            <div class="card-body font-weight-bold nama-produk card-desc-book">
                                <p><?php echo $data["nama_produk"]; ?></p>
                                <p><?php include(str_replace("..", "admin", $data["deskripsi"])) ?></p>
                                <a href="<?php echo str_replace("..", "admin", $data["download"]) ; ?>">Download <?php echo $data["nama_produk"]; ?>.pdf</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>