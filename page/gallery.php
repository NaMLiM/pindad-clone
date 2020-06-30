<link rel="stylesheet" href="css/template-2.css">

<div class="full text-center">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>GALLERY</b></dt></h1>
</div>

<!---->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Ruang Publik</a></li>
        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
                    <li class="py-1"><a href="index.php?page=catalog-and-brochures">Katalog Dan Brosur</a></li>
                    <li class="py-1"><a href="index.php?page=gallery" class="active">Gallery</a></li>
                    <li class="py-1"><a href="index.php?page=video">Video</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 text-dark">
            
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <input type="text" class="search" name="search" placeholder="Quick Search">
        </div>
        <div class="col-md-9 row mb-5">
            <?php
                $select = mysqli_query($connection, "select * from produk where jenis_produk='Gallery'");
                while($data = mysqli_fetch_array($select)){
                    ?>
                    <div class="col-md-3 mb-2 px-2 produks-card" data-target="<?php echo $data['kategori'] ?>">
                        <div class="card">
                            <div class="card-overlay">
                                <a href="admin/upload/<?php echo explode("-", $data["gambar"])[0]; ?>/gambar/<?php echo explode("-", $data["gambar"])[1] ?>" class="eye rounded-circle bg-orange text-white"><i class="fas fa-eye"></i></a>
                                <i class="fas fa-caret-up fa-2x panah-up"></i>
                            </div>
                            <img class="card-img-top" src="admin/upload/<?php echo explode("-", $data["gambar"])[0]; ?>/gambar/<?php echo explode("-", $data["gambar"])[1]; ?>">
                            <div class="card-body font-weight-bold nama-produk">
                                <?php echo $data["nama_produk"]; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>