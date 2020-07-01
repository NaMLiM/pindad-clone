<link rel="stylesheet" href="css/template-2.css">

<div class="full text-center">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>ANNUAL REPORT</b></dt></h1>
</div>

<!---->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Perusahaan</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Corporate Communication</a></li>
        <li class="breadcrumb-item active" aria-current="page">Annual Report</li>
    </ol>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="pb-5">
                <h5 class="font-weight-bold text-dark">Corporate Communication</h5>
                <ul class="fa-ul list-aside my-3">
                    <li class="py-1"><a href="index.php?page=annual-report" class="active">Annual Report</a></li>
                    <li class="py-1"><a href="index.php?page=achievement">Achievement</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 text-dark isi">
            <p>Perkembangan PT Pindad (Persero) mulai dari manajemen, keuangan, produk hingga inovasi dan kegiatan sosial setiap tahun dapat dilihat dalam Annual Report kami.</p>
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
                $select = mysqli_query($connection, "select * from produk where jenis_produk='Annual Report'");
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
                                <a href="<?php echo str_replace("..", "admin", $data["download"]) ; ?>" target="_blank">Download <?php echo $data["nama_produk"]; ?>.pdf</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>